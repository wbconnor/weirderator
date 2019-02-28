<template>
    <div>
        <div v-for="thing in filteredThings" :key="thing.id" class="d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                      <div class="d-flex justify-content-center">
                        <div class="col-md-2 d-flex justify-content-center align-items-center">
                          <svg v-bind:class="{ downvote: user!=false }" @click="vote(thing. id, 0)" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M12 0c6.623 0 12 5.377 12 12s-5.377 12-12 12-12-5.377-12-12 5.377-12 12-12zm0 1c6.071 0 11 4.929 11 11s-4.929 11-11 11-11-4.929-11-11 4.929-11 11-11zm3 5.753l-6.44 5.247 6.44 5.263-.678.737-7.322-6 7.335-6 .665.753z"/></svg>
                        </div>
                        <div class="col-md-8 align-items-center">
                          <h3 class="card-title my-auto">
                              {{thing.title}}
                          </h3>
                        </div>
                        <div class="col-md-2 d-flex justify-content-center align-items-center">
                            <svg v-bind:class="{ upvote: user!=false }" @click="vote(thing. id, 1)" width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M12 0c6.623 0 12 5.377 12 12s-5.377 12-12 12-12-5.377-12-12 5.377-12 12-12zm0 1c6.071 0 11 4.929 11 11s-4.929 11-11 11-11-4.929-11-11 4.929-11 11-11zm-3 5.753l6.44 5.247-6.44 5.263.678.737 7.322-6-7.335-6-.665.753z"/></svg>
                        </div>
                        <small class="text-muted">{{thing.age}}</small>
                      </div> <!-- d-flex -->
                    </div> <!-- card body -->
                </div> <!-- card -->
            </div> <!-- col-md-8 -->
        </div> <!-- v-for -->
    </div>
</template>

<script>
export default {
  Name: 'things',
  mounted() {
    this.getThings();
  },
  /**
   * TODO: 
   * 
   * Vote Array
   * If user ID present: 
   * - load page with voted things
   * - create array of voted things
   * - when user votes
   * - push thing & direction to vote array
   * 
   * */ 
  props: [
    'user',
    'csrf_token'
  ],
  data() {
    return {
      things: [],
      search: '',
    };
  },
  methods: {
    getThings(url = '/api/things') {
      axios.get(url, {params: this.tableData})
        .then(response => {
          console.log(response.data);
          this.things = response.data;
        })
        .catch(errors => {
          console.log(errors);
        });
    },
    vote(thingId, voteDir) {
      axios.post('/api/votes', {
        userId: this.user.id,
        thingId: thingId,
        voteDirection: voteDir
      })
      .then(function (response) {
        console.log(response);
      })
      .catch(function (error) {
        console.log(error);
      });
    },
  },
  computed: {
    filteredThings() {
      let things = this.things;
      if (this.search) {
        things = things.filter((row) => {
          return Object.keys(row).some((key) => {
            return String(row[key]).toLowerCase().indexOf(this.search.toLowerCase()) > -1;
          })
        });
      }
      return things;
    },
  },
};
</script>


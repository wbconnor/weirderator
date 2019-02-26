<template>
    <div>
        <div v-for="thing in filteredThings" :key="thing.id">
            <div class="col-md-10">
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <p class="card-text">
                            @{{thing.title}}
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Weird</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Normal</button>
                            </div>
                            <small class="text-muted">@{{thing.age}}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  Name: 'example',
  mounted() {
    this.getThings();
  },
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


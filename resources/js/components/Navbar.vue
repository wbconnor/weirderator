<template>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal">
            <a href="/" class="unstyle">
                Weirderator
            </a>
        </h5>
        
        <form class="navbar-form search"  v-bind:class="{ expanded: expandSearch }" role="search">
            <div class="input-group pull-right">
                <input type="text" class="form-control pull-right" placeholder="Search">
                <span class="input-group-btn"></span>
            </div>
        </form>

      <ul class="nav navbar-nav navbar-right">
        <li>
            <a href="#" class="slide">
                <svg @click="slide('svgSearch')" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M23.809 21.646l-6.205-6.205c1.167-1.605 1.857-3.579 1.857-5.711 0-5.365-4.365-9.73-9.731-9.73-5.365 0-9.73 4.365-9.73 9.73 0 5.366 4.365 9.73 9.73 9.73 2.034 0 3.923-.627 5.487-1.698l6.238 6.238 2.354-2.354zm-20.955-11.916c0-3.792 3.085-6.877 6.877-6.877s6.877 3.085 6.877 6.877-3.085 6.877-6.877 6.877c-3.793 0-6.877-3.085-6.877-6.877z"/></svg>
            </a>
            <a href="/login" class="slide">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M10 16c0-1.104.896-2 2-2s2 .896 2 2c0 .738-.404 1.376-1 1.723v2.277h-2v-2.277c-.596-.347-1-.985-1-1.723zm11-6v14h-18v-14h3v-4c0-3.313 2.687-6 6-6s6 2.687 6 6v4h3zm-13 0h8v-4c0-2.206-1.795-4-4-4s-4 1.794-4 4v4zm11 2h-14v10h14v-10z"/></svg>
            </a>
        </li>
      </ul>

    </div>
</template>
<script>
export default {
    Name: 'navbar',
    data: function() { 
        return {
            expandSearch:false
        }
    },
    methods: {
        slide(el) {
            return this.expandSearch = !this.expandSearch;
        }
    }
};
</script>
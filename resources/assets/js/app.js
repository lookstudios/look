require('./bootstrap');
window.Vue = require('vue');

//Components
Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app',

    data() {
    	return {
    		pageHeight: 0,
  			viewportHeight: 0,
    	}
    },

    mounted() {
    	this.getDimensions();
    	$(window).on('resize', this.getDimensions);
    },

    methods: {

    	getDimensions: function() {
			this.pageHeight = $('.section').height() * ($('.section').length - 1);
			this.viewportHeight = $(window).height();
		},

		scrollHandler: function(e) {
			var y = $(e.target).scrollTop();
			if (y + this.viewportHeight > this.pageHeight) {
				$('.section-container').scrollTop(y % this.pageHeight);
			}
		}
    }
});

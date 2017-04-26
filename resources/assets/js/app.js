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
  			lastFlicker: 0,
    	}
    },

    mounted() {
    	this.getDimensions();
    	this.flicker();
    	$(window).on('resize', this.getDimensions);
    },

    methods: {

    	flicker() {
    		$(".logo-center").toggleClass('off');
    		let repeat = 0;

    		if(this.lastFlicker < 5){
				this.lastFlicker++;
				repeat = Math.random() * 100;
			}else{
				this.lastFlicker = 0;
				repeat = Math.random() * 2300;
			}

    		setTimeout(() => {
	    		this.flicker();
	    	}, repeat);
    	},

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

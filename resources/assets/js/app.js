require('./bootstrap');
window.Vue = require('vue');

//Components
//Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app',

    data() {
    	return {
    		pageHeight: 0,
  			viewportHeight: 0,
  			lastFlicker: 0,
  			showNav: false
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
				repeat = Math.random() * 300;
			}else{
				this.lastFlicker = 0;
				repeat = false;
			}

			if(repeat) {
	    		setTimeout(() => {
		    		this.flicker();
		    	}, repeat);
		    }
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
		},

		goTo(element) {
			this.showNav = false;
			setTimeout(() => {
				this.scrollTo(element);
			}, 300)
		},

		updateNavBg(bg, position = 'top') {
			$('.nav-area').css({
				'background-image': 'url(' + bg + ')',
				'background-position': position
			});
		},

		removeBackground() {
			$('.nav-area').css('background-image', 'none');
		},

		scrollTo(element, speed = 300) {
			var scrollPos = $('.section-container').scrollTop();
			var top = $(element).position().top + scrollPos;
			console.log(top, scrollPos, $(element).position().top)
			$(".section-container").animate({
				scrollTop: top + "px"
			}, speed);
		}
    }
});

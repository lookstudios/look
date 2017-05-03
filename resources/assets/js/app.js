require('./bootstrap');
window.Vue = require('vue');

//Components
import VueLoop from 'vue-loop';

const app = new Vue({
    el: '#app',

    data() {
    	return {
    		pageHeight: 0,
  			viewportHeight: 0,
  			showNav: false
    	}
    },

    components: {
    	VueLoop
    },

    mounted() {

    	const container = document.getElementsByClassName('loop-container')[0];
    	container.addEventListener('scroll', (event) => {
    		document.getElementsByClassName('banner')[0].style.transform = 'translateY(' + parseInt(container.scrollTop / 7) + 'px)';
    		document.getElementById('imageCont').style.transform = 'translateX(-' + parseInt(container.scrollTop / 15) + 'px)';
    	}, true);

    },

    methods: {

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
			console.log(element, speed);
			var scrollPos = $('.loop-container').scrollTop();
			var top = $(element).position().top + scrollPos;
			console.log(top, scrollPos, $(element).position().top)
			$(".loop-container").animate({
				scrollTop: top - 10 + "px"
			}, speed);
		}
    }
});

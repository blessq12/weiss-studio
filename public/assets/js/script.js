
document.addEventListener("DOMContentLoaded",function(){

	//loader
	let loader = document.querySelector('.loader')
	loader.classList.add('d-none')

	//sticky menu 
	let topHeaderHeight = document.querySelector('.mad_top_header').offsetHeight
	let menu = document.querySelector(".menu_wrap")
	//scroll events
	window.addEventListener("scroll",function(){
		if(window.scrollY > topHeaderHeight){
			menu.classList.add('sticky')
		} else {
			menu.classList.remove('sticky')
		}
	})
	//timer events

	// tabs section
	let tabsNav = document.querySelector('.tabs_nav')
	let spanCollection = tabsNav.getElementsByTagName('span')
	let tabsContent = document.querySelector('.tabs_content')
	let tabs = tabsContent.getElementsByClassName('tab-content')
	tabs[0].querySelector('.tabs_conrainer').innerHTML = '<p class="m-0">'+ spanCollection[0].innerHTML + '</p>'
	//	active class add to list
	for (span of spanCollection){
		span.addEventListener("click",function(){
			for (tab of tabs){
				tab.classList.add('d-none')
			}
			for (span of spanCollection){
				span.classList.remove('active')
			}
			let target = this.parentElement.dataset.tab
			for (tab of tabs){
				if (tab.dataset.tabTarget === target){
					tab.classList.remove('d-none')
					let tabHeader = tab.querySelector('.tabs_conrainer')
					tabHeader.innerHTML = '<p class="m-0">'+ this.innerHTML + '</p>'
				}
			}
			this.classList.add('active')
		})
	}
	// mobile menu

	let mt = document.querySelector('.mobile-toggler')
	let mm = document.querySelector('.mobile-menu')
	mt.addEventListener("click",()=>{
		mm.classList.toggle('show-mobile')
		document.querySelector('.page-layout').classList.toggle('d-none')
		this.body.classList.toggle('overflow-hidden')
	})
})
//jQuery scripts
$(document).ready(function(){
	//testimonial carousel
	$('#testimonialCarousel').owlCarousel({
		items: $('#testimonialCarousel').attr("data-max-items"),
		loop: true,
		dots: true
	})
	//services carousel
	$('#serviceCarousel').owlCarousel({
		items: $('#serviceCarousel').attr("data-max-items"),
		loop: true,
		autoplay: true,
		dots: true,
		nav: false,
		responsive: {
			0: {items: 1,nav: false},
			480: {items: 2,nav: false},
			768: {items: 2,nav: false},
			992: {items: 3,nav: false}
		}
	})
	//galery carousel
	$('#gallery_carousel').owlCarousel({
		items: $('#gallery_carousel').attr("data-max-items"),
		loop: true,
		nav: true,
		dots: true,
		responsive: {
			0: {items: 2},
			480: {items: 2},
			768: {items: 3},
			992: {items: 4}
		}
	})
	//custom buttons to carousel
	$('.mad_owl_prev').on('click',function(){
		$('#gallery_carousel').trigger('prev.owl.carousel')
	})
	$('.mad_owl_next').on('click',function(){
		$('#gallery_carousel').trigger('next.owl.carousel')
	})
	//team carousel
	$('#teamCarousel').owlCarousel({
		items: $('#teamCarousel').attr("data-max-items"),
		loop: false,
		dots: true,
		responsive: {
			0: {items: 1},
			480: {items: 2},
			768: {items: 2},
			992: {items: 3}
		}
	})
	//news carousel
	$('#newsCarousel').owlCarousel({
		items: 2,
		loop: true,
		dots: false,
		nav: false,
		responsive: {
			0: {items: 1},
			480: {items: 2},
			768: {items: 2},
			992: {items: 2}
		}
	})
	
})
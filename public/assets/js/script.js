
document.addEventListener("DOMContentLoaded",function(){

	//loader
	let loader = document.querySelector('.loader')
	setTimeout(()=>{
		loader.classList.add('hide')
	},'2000')
	
	// hero ticker vertical
	let delay = document.querySelector('.hero-ticker-wrap').dataset.delay
	
	setInterval(() => {
		let el = document.getElementsByClassName('ticker-item')[0],
				ticker = document.querySelector('.hero-ticker'),
				clone = el.cloneNode(true)
			ticker.append(clone)
			el.classList.add('item-hide')
			setTimeout(() => {
				el.remove()
			}, 300);
		}, delay);
	// image about section
	let rightImg = document.querySelector('.right-image').dataset.background
	let leftImg = document.querySelector('.left-image').dataset.background
	
	// cta launcher
	let launcher = document.querySelector('.launcher')
	let ctaList = document.querySelector('.cta-list')
	let launchButton = document.querySelector('.launch-button')
	launcher.addEventListener('click',()=>{
		ctaList.classList.toggle('list-hide')
		launchButton.querySelector('.touch').classList.toggle('d-none')
		launchButton.querySelector('.closeBtn').classList.toggle('d-none')
	})
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
	//smooth scroll
	let menuContainer = document.querySelector('#menu')
	let menuItems = menuContainer.querySelectorAll('a[href^="#"]')
	menuItems.forEach(item => {
		item.addEventListener('click',function(e){
			for (el of menuItems){
				el.parentElement.classList.remove('current')
			}
			item.parentElement.classList.add('current')
			let hash = item.getAttribute('href')
			let target = document.querySelector(hash)
			target.scrollIntoView({
				behavior: 'smooth',
				block: 'start'
			})
			e.preventDefault
		})
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
	})
	let mobileList = document.querySelector('.mobile-list')
	let mobileLinks = mobileList.querySelectorAll('a[href^="#"]')
	mobileLinks.forEach(link => {
		link.addEventListener('click',function(){
			for (el of mobileLinks){
				el.classList.remove('mob-link-active')
			}
			let hash = link.getAttribute('href')
			let target = document.querySelector(hash)
			target.scrollIntoView({
				behavior: 'smooth',
				block: 'start'
			})
			link.classList.add('mob-link-active')
			mm.classList.toggle('show-mobile')
			document.querySelector('.page-layout').classList.toggle('d-none')
		})
	})
	// certificates ticker script
	let ticker = document.querySelector('.ticker'),
        list = document.querySelector('.ticker-list'),
        clone = list.cloneNode(true)
    ticker.append(clone)
	
	//services section

	let serviceLists = document.querySelectorAll('.service-list')
	for (serviceList of serviceLists){
		let serviceItems = serviceList.querySelectorAll('li.item')
		for (serviceItem of serviceItems){
			let proceduresList = serviceItem.querySelector('.procedures'),
				proceduresQty = proceduresList.querySelectorAll('li')
				for (procedure of proceduresQty){
					if (procedure.classList.contains('active')){
						let priceActive = procedure.closest('li.item').querySelector('span')
						priceActive.innerHTML = procedure.dataset.price						
					}
					procedure.addEventListener('click',function(serviceItem){
						let price = this.dataset.price,
							pricePlace = this.closest('li.item').querySelector('span')
						for (item of proceduresQty){item.classList.remove('active')}
						this.classList.add('active')
						this.closest('li.item').querySelector('span').innerHTML = price
						this.closest('li.item').querySelector('span').classList.add('price-anim')
						setTimeout(function(){
							pricePlace.classList.remove('price-anim')
							console.log('deleted')
						},300)
					})
				}
		}
	}
	//end services section
	let prLists = document.querySelectorAll('.procedures')
	for (prList of prLists){
		let childLi = prList.querySelectorAll('li'),
			price = childLi[0].dataset.price,
			parent = prList.closest('li.item'),
			priceNode = parent.querySelector('.price-block span')
		priceNode.innerHTML = price
		childLi[0].classList.add('active')
	}
	
	//modal 
	let targetButtons = document.querySelectorAll('[data-toggle]')
	let modalsWindows = document.querySelectorAll('.cta-modal-block')
	for (modalWindow of modalsWindows){
		let modalContent = modalWindow.querySelector('.modal-content')

		let modalHeader = document.createElement('h4'),
			selectedService = document.createElement('h5'),
			modalParagraph = document.createElement('p')
			
		modalContent.prepend(modalParagraph)
		modalContent.prepend(selectedService)
		modalContent.prepend(modalHeader)

		modalHeader.classList.add('text-white')
		selectedService.classList.add('text-white','mb-3')
		selectedService.classList.add('text-white','mb-3')
		selectedService.style.lineHeight = 1.2
		modalParagraph.classList.add('text-white','m-0')
	}
	for (targetButton of targetButtons){
		targetButton.addEventListener('click',function(){

			let modalId = this.dataset.target,
				modal = document.querySelector( '#' + modalId ),
				closeBtn = modal.querySelector('div.close-button')
			// show modal window
			modal.classList.remove('d-none')

			// inner modal content
			let h4 = modal.querySelector('.modal-content').querySelector('h4'),
				h5 = modal.querySelector('.modal-content').querySelector('h5'),
				p = modal.querySelector('.modal-content').querySelector('p')
			
			// placement objects in modal
			if (modalId == 'order-modal'){
				let serviceItem = this.closest('li.item'),
					serviceHeading = serviceItem.querySelector('h4').innerHTML,
					serviceQty = serviceItem.querySelector('li.active').innerHTML,
					servicePrice = serviceItem.querySelector('li.active').dataset.price
				
				
				h4.innerHTML = 'Запись на ' + serviceHeading.toLowerCase()
				h5.innerHTML = 'Кол-во процедур: ' + serviceQty + ', Стоимость: ' + servicePrice
				p.innerHTML = 'Укажите свои контактные данные, мы свяжемся с Вами в ближайшее время для уточнения времени и подтверждения записи.'
			} else if (modalId == 'basic-modal'){
				h4.innerHTML = 'Добро пожаловать в Weiss Studio'
				h5.innerHTML = 'Впервые у нас? Для вас подарок!'
				p.innerHTML = 'При первом посещении студии дарим скидку на пробный массаж. Стоимость 300 рублей за 30 минут массажа.'
			}
			// close action
			closeBtn.addEventListener('click',function(){
				modal.classList.add('d-none')
			})
			
		})
	}
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
		autoplay: false,
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
		dots: false,
		responsive: {
			0: {items: 1},
			480: {items: 2},
			768: {items: 2},
			992: {items: 3}
		}
	})
})
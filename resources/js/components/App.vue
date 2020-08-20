<template>
	<div>
		 <Navbar :ruta="ruta"></Navbar> 
   	 	 <Content :ruta="ruta"></Content>
   	 	 <Footer></Footer>

</div>


</template>

<script>
	import Navbar from './plantilla/Navbar'
	import Content from './plantilla/content'
	import Footer from './plantilla/footer'
    export default {
    	props: ['ruta'],
       components: {Navbar,Content,Footer}
    }
</script>

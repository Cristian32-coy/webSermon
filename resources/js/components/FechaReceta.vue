<template>
	<span v-text="formateoFecha"></span>
</template>

<script>
	
	export default {

		props:['fecha'],
		computed:{
			formateoFecha(){
				return moment(this.fecha).locale('es').format('DD [de] MMMM [del] YYYY')
			}
		}
	}
</script>
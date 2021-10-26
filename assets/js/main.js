function load(){
	$(".post").each((i, e)=>{
		
		
		let datep = new Date($(e).data("published"));
		let datenow = new Date();

		const MILLISECONDS_OF_A_SECOND = 1000;
		const MILLISECONDS_OF_A_MINUTE = MILLISECONDS_OF_A_SECOND * 60;
		const MILLISECONDS_OF_A_HOUR = MILLISECONDS_OF_A_MINUTE * 60;
		const MILLISECONDS_OF_A_DAY = MILLISECONDS_OF_A_HOUR * 24

		const DURATION = datenow - datep;
		const REMAINING_DAYS = Math.floor(DURATION / MILLISECONDS_OF_A_DAY);

		$(e).find(".days-published").text(`Hace ${REMAINING_DAYS} días`)
		// debugger;
		console.log("DATE", REMAINING_DAYS);
	});


	//calculamos el alto para el video
	//youtube pone para el iframe un w = 560 y un h = 315 en base a eso aplicamos regla de 3
	//tomamos el ancho del contenedor del video actual 
	let wa = $("#cvideo").width();
	let h = wa * 315 / 560;
	$("#cvideo iframe").height(h);
}
$(document).ready(load);
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
}
$(document).ready(load);
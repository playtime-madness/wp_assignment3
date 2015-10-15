function Countdown()
{


	this.target_date = new Date("Oct 17, 2015").getTime();
	
	this.target_id = "#timer";
	this.name = "timer";


}

Countdown.prototype.init = function()
{
	setInterval(this.name + '.tick()',1000);
}

Countdown.prototype.reset = function()
{

	this.update_target();
}

Countdown.prototype.tick = function()
{
	
this.current_date = new Date().getTime();
	this.seconds_left = (this.target_date - this.current_date) / 1000;

	this.days = parseInt(this.seconds_left / 86400);
    this.seconds_left = this.seconds_left % 86400;
     
    this.hours = parseInt(this.seconds_left / 3600);
    this.seconds_left = this.seconds_left % 3600;
     
	this.minutes = parseInt(this.seconds_left / 60);
	this.seconds = parseInt(this.seconds_left % 60);

	this.update_target()
}

Countdown.prototype.update_target = function()
{
	
	if(this.seconds < 10) this.seconds = "0" + this.seconds;
	if(this.minutes < 10) this.minutes = "0" + this.minutes;
	if(this.hours < 10) this.hours = "0" + this.hours;
	if(this.days < 10) this.days = "0" + this.days;
	$(this.target_id).text(this.days + ":" + this.hours + ":" + this.minutes + ":" + this.seconds)
}




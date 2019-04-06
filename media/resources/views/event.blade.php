@extends('layouts.nav_bar')
@section('content')
<div class="caleb">
<div class="ml-calendar">
	<section class="calendar-left">
		<div class="sidebar">
			<p class="subheading">Today</p>
			<h1>Tuesday, <br/>January 1st </h1>
			<h3 class="primary-color">4 Items</h3>
			<ul class="calendar-events">
				<li>
					<p><strong>8:00 AM</strong><br/>
					Team Meeting</p>
				</li>
				<li>
					<p><strong>10:00 AM</strong><br/>
					Call Jane</p>
				</li>
				<li>
					<p><strong>12:00 PM</strong><br/>
					Lunch with John</p>
				</li>
				<li>
					<p><strong>7:00 PM</strong><br/>
					Dinner with Jane</p>
				</li>
			</ul>
		<p><a href="#" class="calendar-btn"><i class="fas fa-plus"></i> Add new item</a></p>
		</div><!-- end of  sidebar-->
	</section>
	<section class="calendar-right">
		<div class="calendar">
			<section class="calendar-header">
				<h2><strong>January</strong> 2019</h2>
				<div class="calendar-nav">
					<a href="#"><i class="fas fa-arrow-left"></i></a><a href="#">Today</a><a href="#"><i class="fas fa-arrow-right"></i></a>&nbsp;
				</div>
			</section>
			<section class="calendar-row">
				<div class="calendar-day day-name">Mon</div>
				<div class="calendar-day day-name">Tue</div>
				<div class="calendar-day day-name">Wed</div>
				<div class="calendar-day day-name">Thu</div>
				<div class="calendar-day day-name">Fri</div>
				<div class="calendar-day day-name">Sat</div>
				<div class="calendar-day day-name">Sun</div>
			</section>
			<section class="calendar-row">
				<div class="calendar-day inactive">
					<span class="calendar-date">31</span>
				</div>
				<div class="calendar-day active">
					<span class="calendar-date">1</span>
					<br/><span class="calendar-event">4</span>
				</div>
				<div class="calendar-day">
					<span class="calendar-date">2</span>
				</div>
				<div class="calendar-day">
					<span class="calendar-date">3</span>
				</div>
				<div class="calendar-day">
					<span class="calendar-date">4</span>
				</div>
				<div class="calendar-day weekend">
					<span class="calendar-date">5</span>
				</div>
				<div class="calendar-day weekend">
					<span class="calendar-date">6</span>
				</div>
			</section>
			<section class="calendar-row">
				<div class="calendar-day">
					<span class="calendar-date">7</span>
				</div>
				<div class="calendar-day">
					<span class="calendar-date">8</span>
				</div>
				<div class="calendar-day">
					<span class="calendar-date">9</span>
				</div>
				<div class="calendar-day">
					<span class="calendar-date">10</span>
				</div>
				<div class="calendar-day">
					<span class="calendar-date">11</span>
				</div>
				<div class="calendar-day weekend">
					<span class="calendar-date">12</span>
				</div>
				<div class="calendar-day weekend">
					<span class="calendar-date">13</span>
				</div>
			</section>
			<section class="calendar-row">
				<div class="calendar-day">
					<span class="calendar-date">14</span>
				</div>
				<div class="calendar-day">
					<span class="calendar-date">15</span>
					<br/><span class="calendar-event">5</span>
				</div>
				<div class="calendar-day">
					<span class="calendar-date">16</span>
				</div>
				<div class="calendar-day">
					<span class="calendar-date">17</span>
				</div>
				<div class="calendar-day">
					<span class="calendar-date">18</span>
				</div>
				<div class="calendar-day weekend">
					<span class="calendar-date">19</span>
				</div>
				<div class="calendar-day weekend">
					<span class="calendar-date">20</span>
				</div>
			</section>
			<section class="calendar-row">
				<div class="calendar-day">
					<span class="calendar-date">21</span>
				</div>
				<div class="calendar-day">
					<span class="calendar-date">22</span>
				</div>
				<div class="calendar-day">
					<span class="calendar-date">23</span>
				</div>
				<div class="calendar-day">
					<span class="calendar-date">24</span>
				</div>
				<div class="calendar-day">
					<span class="calendar-date">25</span>
				</div>
				<div class="calendar-day weekend">
					<span class="calendar-date">26</span>
					<br/><span class="calendar-event">1</span>
				</div>
				<div class="calendar-day weekend">
					<span class="calendar-date">27</span>
				</div>
			</section>
			<section class="calendar-row">
				<div class="calendar-day">
					<span class="calendar-date">28</span>
				</div>
				<div class="calendar-day">
					<span class="calendar-date">29</span>
				</div>
				<div class="calendar-day">
					<span class="calendar-date">30</span>
				</div>
				<div class="calendar-day">
					<span class="calendar-date">31</span>
					<br/><span class="calendar-event">3</span>
				</div>
				<div class="calendar-day inactive">
					<span class="calendar-date">1</span>
				</div>
				<div class="calendar-day weekend inactive">
					<span class="calendar-date">2</span>
				</div>
				<div class="calendar-day weekend inactive">
					<span class="calendar-date">3</span>
				</div>
			</section>
		</div>
	</section>
</div><br><br><br>
	<div class="clear"></div>
	<br><br>
@endsection
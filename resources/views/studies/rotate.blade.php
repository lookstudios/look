@extends('layouts.default', [
	'title' => 'Rotate'
])
@section('content')  
    @include('global.nav')
    <div id="study">
        <div class="loop-container full">
        	<div class="item spaced banner rotate-banner">
        		@include('global.header')
        		<div class="container">
        			<h1>Rotate carefully selects three products to showcase every Monday.</h1>
        		</div>
        		<div></div>
        	</div>

        	<div class="item no-height push-top">
        		<div class="container container-lg">
        			<img src="/img/studies/rotate/products.png" alt="Rotate projects" width="100%">
        		</div>

                <div class="container sep">
                    <h2 class="rotate">From idea to launch in 24 hours.</h2>
                    <p>Rotate’s audience ranges from casual shoppers to industrial designers. We set out to create a digital product in twenty-four hours that would help anyone discover new products to buy.</p>
                    <p>We spent all morning defining the product strategy, user experience, visual design, and branding. The backend was developed during the design phase and frontend directly after user experience.</p>
                </div>
            </div>

        	<div class="item no-height grey-area">
        		<div class="container container-lg level" id="imageCont">
        			<img src="/img/studies/rotate/home.png" alt="http://rotate.am/" />
        			<img src="/img/studies/rotate/home.png" alt="http://rotate.am/" />
        		</div>
        	</div>

        	<div class="item centered">
        		<div class="container">
        			<h1>I like that it's focused on few, hand-selected products vs. yet-another-infinite feed.</h1>
        			<h4 class="rotate"><a href="#" target="_blank">Ryan Hoover</a>, founder of Product Hunt</h4>
        		</div>
        	</div>

        	<div class="item centered grey-area">
        		<div class="container container-lg">
        			<img src="/img/studies/rotate/mobile.png" alt="http://rotate.am/" />
        		</div>
        	</div>

        	<div class="item no-height">
                <div class="level">
					<div class="flex background-rotate center">
						<img src="/img/studies/rotate/logo.png" alt="http://rotate.am/" style="max-height: 610px;" />
					</div>
					<div class="flex center">
						<img src="/img/studies/rotate/colors.png" alt="http://rotate.am/" style="max-height: 610px;" />
					</div>
				</div>
        	</div>

        	<div class="item centered">
        		<div class="container">
        			<h1>Since the launch of Rotate, we’ve been featured on this, that, and this.</h1>
        			<h4 class="rotate"><a href="http://rotate.am" target="_blank">Visit rotate.am →</a></h4>
        		</div>
        	</div>

        	<footer class="footer">
        		<div class="container">
        			<div class="level">
        				<div class="flex left">&copy; 2017 Look Studios</div>
        				<div class="flex right">
        					<a href="https://github.com/lookstudios" target="_blank">Github</a>
        					<a href="https://twitter.com/lookstudiosco" target="_blank">Twitter</a>
        					<a href="mailto:bobby@lookstudios.co">Contact</a>
        				</div>
        			</div>
        		</div>
        	</footer>
        </div>
    </div>
@stop
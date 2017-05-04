<header class="level header space-between">
	<a href="/">Look Studios</a>

	<div class="sub flex text-center">
		{{ isset($title) ? $title : 'A digital studio based in US &amp; UK.' }}
	</div>
	
	<a href="{{isset($link) ? $link : '#'}}" @if(!isset($link)) @click.stop.prevent="scrollTo('#contact')" @endif  @if(isset($target)) target="{{$target}}" @endif class="text-right {{isset($class) ? $class : ''}}">{{isset($linkTxt) ? $linkTxt : 'Contact'}}</a>
</header>
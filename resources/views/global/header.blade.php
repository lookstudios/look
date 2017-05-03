<header class="level header space-between">
	<a href="/">Look Studios</a>

	<div class="sub flex text-center">
		{{ $title ? $title : 'A digital studio based in US &amp; UK.' }}
	</div>
	
	<a href="{{$link ? $link : '#'}}" @if(!isset($link)) @click.stop.prevent="scrollTo('#contact')" @endif  @if(isset($target)) target="{{$target}}" @endif class="text-right {{$class ? $class : ''}}">{{$linkTxt ? $linkTxt : 'Contact'}}</a>
</header>
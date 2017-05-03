<div class="item top has-background spaced" style="background-image: url('/img/backgrounds/soon.gif'); @if(!isset($menu)) z-index: 0; @endif" @click.prevent="scrollTo('#about')" id="{{isset($id) ? $id : 'hero'}}">
    @if(!isset($menu)) @include('global.header') @endif
    <div class="logo-center"></div>
    <div></div>
</div>
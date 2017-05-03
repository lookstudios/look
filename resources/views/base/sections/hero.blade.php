<div class="section top has-background spaced" style="background-image: url('/img/backgrounds/soon.gif')" @click.prevent="scrollTo('#about')" id="{{isset($id) ? $id : 'hero'}}">
    @if(!isset($menu)) @include('global.header') @endif
    <div class="logo-center"></div>
    <div></div>
</div>
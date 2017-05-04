<div class="nav-area none" v-if="showNav">
    <div class="nav light" @click.prevent="showNav = false"></div>
    <ul class="text-center" @mouseleave="removeBackground">
        <li @mouseover="updateNavBg('/img/backgrounds/soon.gif', 'center')">
            <a href="/#hero" @if(!isset($link)) @click.prevent="goTo('#hero')" @endif>Look</a>
        </li>
        <li @mouseover="updateNavBg('/img/backgrounds/2.png')">
            <a href="/#us" @if(!isset($link)) @click.prevent="goTo('#us')" @endif>Services</a>
        </li>
        <li @mouseover="updateNavBg('/img/backgrounds/3.png')">
            <a href="/#labs" @if(!isset($link)) @click.prevent="goTo('#labs')" @endif>Labs</a>
        </li>
        <li @mouseover="updateNavBg('/img/backgrounds/4.png')">
            <a href="/#contact" @if(!isset($link)) @click.prevent="goTo('#contact')" @endif>Contact</a>
        </li>
    </ul>
</div>
<div class="nav" @click.prevent="showNav = true"></div>

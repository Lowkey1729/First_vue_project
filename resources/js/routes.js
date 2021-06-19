import Colors from './components/Colors.vue';
import Illustrations from './components/Illustrations.vue';
import LoadersAnimations from './components/LoadersAnimations.vue';
import Logo from './components/Logo.vue';
import LogoSymbol from './components/LogoSymbol.vue';
import Mascot from './components/Mascot.vue';
import Typography from './components/Typography.vue';
import Wallpapers from './components/Wallpapers.vue';
import NotFound from './components/NotFound.vue';


export default{

mode: 'history',

linkActiveClass: 'font-bold',


routes: [


    {
        path: '*',
        component: NotFound,

    },


    {
        path: '/mascot',
        component: Mascot,

    },

    {
        path: '/illustrations',
        component: Illustrations,

    },

    {
        path: '/loaders_animations',
        component: LoadersAnimations,

    },

    {
        path: '/logo',
        component: Logo,

    },

    {
        path: '/logo_symbol',
        component: LogoSymbol,

    },

    {
        path: '/colors',
        component: Colors,

    },

    {
        path: '/typography',
        component: Typography,

    },

    {
        path: '/wallpapers',
        component: Wallpapers,

    },




]






}

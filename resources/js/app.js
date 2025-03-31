import './bootstrap';
import Alpine from 'alpinejs';
import './scroll';
import './theme';


window.Alpine = Alpine;

Alpine.start();
import.meta.glob([
    '../fonts/**',
]);
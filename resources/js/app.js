import './bootstrap';
import '../css/app.scss';
import.meta.glob ('../img/*');
import.meta.glob ('../img/projects/bot/*');
import.meta.glob ('../img/projects/brand/*');
import.meta.glob ('../img/projects/digi/*');
import.meta.glob ('../img/projects/food/*');
import.meta.glob ('../img/projects/gary/*');
import.meta.glob ('../img/projects/m4i/*');
import.meta.glob ('../img/projects/obecnosc/*');
import.meta.glob ('../img/projects/open4u/*');
import.meta.glob ('../img/projects/prosper/*');
import.meta.glob ('../img/projects/snake/*');
import.meta.glob ('../img/projects/suchar/*');
import.meta.glob ('../img/projects/*');
import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';

Alpine.plugin(Clipboard)

Livewire.start()

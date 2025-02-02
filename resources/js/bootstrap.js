import Alpine from 'alpinejs'
import hljs from 'highlight.js';
import dart from 'highlight.js/lib/languages/dart';
import 'highlight.js/styles/github-dark.css';

window.Alpine = Alpine;

Alpine.store('darkMode', {
    mode: 'light',

    init() {
        if (localStorage.theme === 'dark') {
            this.dark()
        } else if (localStorage.theme === 'light') {
            this.light()
        } else {
            this.system()
        }
    },

    dark() {
        document.documentElement.classList.add('dark')
        localStorage.theme = 'dark'
        this.mode = 'dark'
    },

    system() {
        if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.classList.add('dark')
            localStorage.theme = 'dark'
            this.mode = 'dark'
        } else {
            document.documentElement.classList.remove('dark')
            localStorage.theme = 'light'
            this.mode = 'light'
        }
    },

    light() {
        document.documentElement.classList.remove('dark')
        localStorage.theme = 'light'
        this.mode = 'light'
    }
})

Alpine.start();
hljs.registerLanguage('dart', dart);
hljs.highlightAll();

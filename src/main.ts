import './assets/styles/reset.css'
import './assets/styles/app.scss'
import App from './App.svelte'

const app = new App({
  target: document.getElementById('app'),
})

export default app
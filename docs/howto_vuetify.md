# Howto vuetify

## setup
1.  install vue cli
```shell
$ node install -g @vue/cli
```

2. install vuetify 
```shell
$ vue add vuetify
📦  Installing vue-cli-plugin-vuetify...


removed 5 packages, and audited 833 packages in 4s

88 packages are looking for funding
  run `npm fund` for details

found 0 vulnerabilities
✔  Successfully installed plugin: vue-cli-plugin-vuetify

? Choose a preset: (Use arrow keys)
❯ Default (recommended) 
  Preview (Vuetify 3 + Vite) 
  Prototype (rapid development) 
  V3 (alpha) 
  Configure (advanced) 
  
🚀  Invoking generator for vue-cli-plugin-vuetify...
 WARN  conflicting versions for project dependency "sass-loader":

- ^11.0.1 injected by generator "undefined"
- ^10.0.0 injected by generator "vue-cli-plugin-vuetify"

Using newer version (^11.0.1), but this may cause build errors.
📦  Installing additional dependencies...


added 5 packages, and audited 838 packages in 8s

89 packages are looking for funding
  run `npm fund` for details

found 0 vulnerabilities
⚓  Running completion hooks...

✔  Successfully invoked generator for plugin: vue-cli-plugin-vuetify
 vuetify  Discord community: https://community.vuetifyjs.com
 vuetify  Github: https://github.com/vuetifyjs/vuetify
 vuetify  Support Vuetify: https://github.com/sponsors/johnleider
```

3. use Vuetify
```js
import Vuetify from "vuetify";
window.Vue.use(Vuetify);

const app = new Vue({
    ...
    vuetify: new Vuetify(),
```

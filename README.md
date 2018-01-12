# Angular + Drupal 8
Review all the project in [Angular + Drupal 8](https://josuevalrob.com/angular-drupal8). 

Run drupal and Enable all the Services modules.

Also, download and enable the Rest-ui Module.

After that, enable the tasks features.  

Remember to configure your services.yml in the drupal site. Inside drupal Feature you can see an example. 

In the enviroment.ts file update the variables

`mainUrl = 'http://drupal.dd:8083'`

Also the header: 

`const httpHaljson = {
  headers: new HttpHeaders({ 
  "X-CSRF-Token": "Qfnczb1SUnvOAsEy0A_xuGp_rkompgO2oTkCBOSEItM",
  "Authorization": "Basic Qfnczb1SUnvOAsEy0A_xuGp_rkompgO2oTkCBOSEItM", 
  "Content-Type": "application/hal+json"
  })
};`

If you go to production, change that variables from the enviroment.pro.ts

# Task

This project was generated with [Angular CLI](https://github.com/angular/angular-cli) version 1.6.1.

## Development server

Run `ng serve` for a dev server. Navigate to `http://localhost:4200/`. The app will automatically reload if you change any of the source files.


## Code scaffolding

Run `ng generate component component-name` to generate a new component. You can also use `ng generate directive|pipe|service|class|guard|interface|enum|module`.

## Build

Run `ng build` to build the project. The build artifacts will be stored in the `dist/` directory. Use the `-prod` flag for a production build.

## Running unit tests

Run `ng test` to execute the unit tests via [Karma](https://karma-runner.github.io).

## Running end-to-end tests

Run `ng e2e` to execute the end-to-end tests via [Protractor](http://www.protractortest.org/).

## Further help

To get more help on the Angular CLI use `ng help` or go check out the [Angular CLI README](https://github.com/angular/angular-cli/blob/master/README.md).

<template>
  <section class="modul">
    <div class="container text-center slideanim">
      <div class="row">
        <div class="col-sm-12 col-md-12">
          <h3>Modul lengkap untuk menjalankan Aplikasi PHP Anda.</h3>
          <br />

          <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12">
            <table class="table table-sm">
              <tbody>
                <tr :key="module" v-for="(item, module) in items">
                  <td align="left">{{item.list1}}</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12">
            <table class="table">
              <tbody>
                <tr :key="module" v-for="(item, module) in items">
                  <td align="left">{{item.list2}}</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12">
            <table class="table">
              <tbody>
                <tr :key="module" v-for="(item, module) in items">
                  <td align="left">{{item.list3}}</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-6 col-xs-12">
            <table class="table">
              <tbody>
                <tr :key="module" v-for="(item, module) in items">
                  <td align="left">{{item.list4}}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <br />

      <a href="#" class="btn btn-default">
        <b>Selengkapnya</b>
      </a>
    </div>
  </section>
</template>

<script>
import modul from "./json/modul.json";

export default {
  name: "modul-component",
  data() {
    return {
      items: modul
    };
  }
};
</script>

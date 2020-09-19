<template>
  <section class="modul-hosting">
    <div class="container text-center slideanim">
      <div class="row">
        <div class="col-sm-12">
          <h3>Modul lengkap untuk menjalankan Aplikasi PHP Anda.</h3>
          <br />

          <div class="col-md-3">
            <table class="table">
              <tbody>
                <tr v-for="Record in records" v-bind:key="Record.Modul">
                  <td align="left">{{ JSON.parse(Record.Modul).List1}}</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="col-md-3">
            <table class="table">
              <tbody>
                <tr v-for="Record in records" v-bind:key="Record.Modul">
                  <td align="left">{{ JSON.parse(Record.Modul).List2}}</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="col-md-3">
            <table class="table">
              <tbody>
                <tr v-for="Record in records" v-bind:key="Record.Modul">
                  <td align="left">{{ JSON.parse(Record.Modul).List3}}</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="col-md-3">
            <table class="table">
              <tbody>
                <tr v-for="Record in records" v-bind:key="Record.Modul">
                  <td align="left">{{ JSON.parse(Record.Modul).List4}}</td>
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
export default {
  data: function() {
    return {
      records: [
        {
          Modul:
            '{"List1":"IcoPHP","List2":"http","List3":"nd_pdo_mysql","List4":"stats"}'
        },
        {
          Modul:
            '{"List1":"apc","List2":"huffman","List3":"oauth","List4":"stem"}'
        },
        {
          Modul: '{"List1":"apcu","List2":"idn","List3":"oci8","List4":"stomp"}'
        },
        {
          Modul:
            '{"List1":"apm","List2":"igbinary","List3":"odbc","List4":"sohusin"}'
        },
        {
          Modul:
            '{"List1":"ares","List2":"imagick","List3":"opcache","List4":"sybase_ct"}'
        },
        {
          Modul:
            '{"List1":"bcmath","List2":"imap","List3":"pdf","List4":"sysvmsg"}'
        },
        {
          Modul:
            '{"List1":"bcompiler","List2":"inclued","List3":"pdo","List4":"sysvsem"}'
        },
        {
          Modul:
            '{"List1":"big_int","List2":"inotify","List3":"pdo_dblib","List4":"sysvshm"}'
        },
        {
          Modul:
            '{"List1":"bitset","List2":"interbase","List3":"pdo_firebird","List4":"tidy"}'
        },
        {
          Modul:
            '{"List1":"bz2_filter","List2":"ioncube_loader","List3":"pdo_odbc","List4":"trader"}'
        },
        {
          Modul:
            '{"List1":"clamav","List2":"ioncube_loader_4","List3":"pdo_pgsql","List4":"translit"}'
        },
        {
          Modul:
            '{"List1":"coin_acceptor","List2":"jsmin","List3":"pdo_sqlite","List4":"uploadprogress"}'
        },
        {
          Modul:
            '{"List1":"crack","List2":"json","List3":"pgsql","List4":"uri_template"}'
        },
        {
          Modul:
            '{"List1":"dba","List2":"ldap","List3":"phalcon","List4":"uuid"}'
        }
      ]
    };
  }
};
</script>

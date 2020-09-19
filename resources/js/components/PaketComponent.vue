<template>
  <section class="harga" id="harga">
    <div class="container">
      <div class="col-sm-6 col-md-12">
        <div class="row text-center slideanim">
          <h2>
            <b>Paket Hosting Singapura yang Tepat</b>
          </h2>
          <h3>Diskon 40% + Domain dan SSL Gratis untuk Anda</h3>
          <br />
          <br />
          
          <div class="col-md-3 col-sm-6">
            <div class="harga-table side">
              <div class="harga-header">
                <div class="harga-nama">
                  <b>Bayi</b>
                </div>
                <div class="harga-nominal">
                  <h4 v-for="(item, price) in items" :key="price">{{item.bayi_before}}</h4>
                  <sup class="currency">
                    <small>Rp</small>
                  </sup>
                  <span class="amount">
                    <b v-for="(item, price) in items" :key="price">{{item.bayi_after}}</b>
                  </span>
                  <sup class="currency">
                    <small>
                      <b v-for="(item, price) in items" :key="price">{{item.bayi_aftercoma}}</b>/bln
                    </small>
                  </sup>
                </div>
                <div class="harga-nama">
                  <h5>
                    <b v-for="(item, price) in items" :key="price">{{item.bayi_daftar}}</b> Pengguna Terdaftar
                  </h5>
                </div>
              </div>

              <div class="harga-body">
                <ul>
                  <li>
                    <b>0.5X RESOURCE POWER</b>
                  </li>
                  <li>
                    <b>500</b> MB Disk Space
                  </li>
                  <li>
                    <b>Unlimited</b> Bandwidth
                  </li>
                  <li>
                    <b>Unlimited</b> Databases
                  </li>
                  <li>
                    <b>1</b> Domain
                  </li>
                  <li>
                    <b>Instant</b> Backup
                  </li>
                  <li>
                    <b>Unlimited SSL</b> Gratis Selamanya
                  </li>
                  <li>
                    <br />
                    <div class="harga-footer">
                      <a href="#" class="btn btn-default">Pilih Sekarang</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-6">
            <div class="harga-table side">
              <div class="harga-header">
                <div class="harga-nama">
                  <b>Pelajar</b>
                </div>
                <div class="harga-nominal">
                  <h4 v-for="(item, price) in items" :key="price">{{item.pelajar_before}}</h4>
                  <sup class="currency">
                    <small>Rp</small>
                  </sup>
                  <span class="amount">
                    <b v-for="(item, price) in items" :key="price">{{item.pelajar_after}}</b>
                  </span>
                  <sup class="currency">
                    <small>
                      <b v-for="(item, price) in items" :key="price">{{item.pelajar_aftercoma}}</b>/bln
                    </small>
                  </sup>
                </div>

                <div class="harga-nama">
                  <h5>
                    <b v-for="(item, price) in items" :key="price">{{item.pelajar_daftar}}</b> Pengguna Terdaftar
                  </h5>
                </div>
              </div>

              <div class="harga-body">
                <ul>
                  <li>
                    <b>1X RESOURCE POWER</b>
                  </li>
                  <li>
                    <b>Unlimited</b> Disk Space
                  </li>
                  <li>
                    <b>Unlimited</b> Bandwidth
                  </li>
                  <li>
                    <b>Unlimited</b> POP3 Email
                  </li>
                  <li>
                    <b>Unlimite</b> Databases
                  </li>
                  <li>
                    <b>10</b> Addon Domains
                  </li>
                  <li>
                    <b>Instant</b> Backup
                  </li>
                  <li>
                    <b>Domain Gratis</b> Selamanya
                  </li>
                  <li>
                    <b>Unlimited SSL</b> Gratis Selamanya
                  </li>
                  <li>
                    <br />
                    <div class="harga-footer">
                      <a href="#" class="btn btn-default">Pilih Sekarang</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="harga-table side harga-box personal">
              <div class="harga-header">
                <div class="harga-nominal">
                  <b>Personal</b>
                  <h4 v-for="(item, price) in items" :key="price">{{item.personal_before}}</h4>
                  <sup class="currency text-white">
                    <small style="color:#fff;">Rp</small>
                  </sup>
                  <span class="amount">
                    <b v-for="(item, price) in items" :key="price">{{item.personal_after}}</b>
                  </span>
                  <sup class="currency">
                    <small style="color:#fff;">
                      <b v-for="(item, price) in items" :key="price">{{item.personal_aftercoma}}</b>/bln
                    </small>
                  </sup>
                </div>

                <div class="harga-nama border">
                  <h5>
                    <b v-for="(item, price) in items" :key="price">{{item.personal_daftar}}</b> Pengguna Terdaftar
                  </h5>
                </div>

                <div class="harga-ribbon harga-ribbon-top-left">
                  <span>Best Seller!</span>
                </div>
              </div>
              <div class="harga-body border">
                <ul>
                  <li>
                    <b>2X RESOURCE POWER</b>
                  </li>
                  <li>
                    <b>Unlimited</b> Disk Space
                  </li>
                  <li>
                    <b>Unlimited</b> Bandwidth
                  </li>
                  <li>
                    <b>Unlimited</b> POP3 Email
                  </li>
                  <li>
                    <b>Unlimite</b> Databases
                  </li>
                  <li>
                    <b>Unlimited</b> Addon Domains
                  </li>
                  <li>
                    <b>Instant</b> Backup
                  </li>
                  <li>
                    <b>Domain Gratis</b> Selamanya
                  </li>
                  <li>
                    <b>Unlimited SSL</b> Gratis Selamanya
                  </li>
                  <li>
                    <b>Private</b> Name Server
                  </li>
                  <li>
                    <b>SpamAssasin</b> Mail Protection
                  </li>
                  <li>
                    <br />
                    <a href="#" class="btn btn-main hrf">
                      <b>Pilih Sekarang</b>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="harga-table">
              <div class="harga-header">
                <div class="harga-nama">Bisnis</div>
                <div class="harga-nominal">
                  <h4 v-for="(item, price) in items" :key="price">{{item.bisnis_before}}</h4>
                  <sup class="currency">
                    <small>Rp</small>
                  </sup>
                  <span class="amount">
                    <b v-for="(item, price) in items" :key="price">{{item.bisnis_after}}</b>
                  </span>
                  <sup class="currency">
                    <small>
                      <b v-for="(item, price) in items" :key="price">{{item.bisnis_aftercoma}}</b>/bln
                    </small>
                  </sup>
                </div>

                <div class="harga-nama">
                  <h5>
                    <b v-for="(item, price) in items" :key="price">{{item.bisnis_daftar}}</b> Pengguna Terdaftar
                  </h5>
                </div>
              </div>

              <div class="harga-body">
                <ul>
                  <li>
                    <b>3X RESOURCE POWER</b>
                  </li>
                  <li>
                    <b>Unlimited</b> Disk Space
                  </li>
                  <li>
                    <b>Unlimited</b> Bandwidth
                  </li>
                  <li>
                    <b>Unlimited</b> POP3 Email
                  </li>
                  <li>
                    <b>Unlimite</b> Databases
                  </li>
                  <li>
                    <b>Unlimited</b> Addon Domains
                  </li>
                  <li>
                    <b>Magic</b> Auto Backup & Restore
                  </li>
                  <li>
                    <b>Domain Gratis</b> Selamanya
                  </li>
                  <li>
                    <b>Unlimited SSL</b> Gratis Selamanya
                  </li>
                  <li>
                    <b>Private</b> Name Server
                  </li>
                  <li>
                    <b>Prioritas</b> Layanan Support
                  </li>
                  <li>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <br />

                    <b>SpamAssasin</b> Mail Protection
                  </li>
                  <li>
                    <br />
                    <div class="harga-footer">
                      <a href="#" class="btn btn-default">Pilih Sekarang</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import harga from "./json/harga.json";

export default {
  name: "paket-component",
  data() {
    return {
      items: harga
    };
  }
};
</script>
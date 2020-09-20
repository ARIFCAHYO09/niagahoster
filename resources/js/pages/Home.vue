<template>
    <div>
      <transition name="fade" mode="out-in">
        <div>
          asu
          <menu-component></menu-component>
          <navbar-component></navbar-component>
          <headline-component></headline-component>
          <fitur-component></fitur-component>
          <paket-component></paket-component>
          <limit-component></limit-component>
          <support-component></support-component>
          <framework-component></framework-component>
          <modul-component></modul-component>
          <linux-component></linux-component>
          <share-component></share-component>
          <bantuan-component></bantuan-component>
          <footer-component></footer-component>
          <copyright-component></copyright-component>
        </div>
      </transition>
    </div>
</template>

<script>
import MenuComponent from "../components/MenuComponent.vue";
import NavbarComponent from "../components/NavComponent.vue";
import HeadlineComponent from "../components/HeadlineComponent.vue";
import FiturComponent from "../components/FiturComponent.vue";
import PaketComponent from "../components/PaketComponent.vue";
import LimitComponent from "../components/LimitComponent.vue";
import SupportComponent from "../components/SupportComponent.vue";
import FrameworkComponent from "../components/FrameworkComponent.vue";
import ModulComponent from "../components/ModulComponent.vue";
import LinuxComponent from "../components/LinuxComponent.vue";
import ShareComponent from "../components/ShareComponent.vue";
import BantuanComponent from "../components/BantuanComponent.vue";
import FooterComponent from "../components/FooterComponent.vue";
import CopyrightComponent from "../components/CopyrightComponent.vue";

export default {
  components: {
    MenuComponent,
    NavbarComponent,
    HeadlineComponent,
    FiturComponent,
    PaketComponent,
    LimitComponent,
    SupportComponent,
    FrameworkComponent,
    ModulComponent,
    LinuxComponent,
    ShareComponent,
    BantuanComponent,
    FooterComponent,
    CopyrightComponent
  }
};
</script>

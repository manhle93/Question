<template>
  <!-- <div
    style="height: 100%; width: 100%; overflow-y:hidden;background-image:url('https://res.cloudinary.com/dsobei3hp/image/upload/v1583758350/hoithi/Giao_di%E1%BB%87n_thi_ch%C3%ADnh_gczcds.jpg');background-size:100% 100%;  overflow-x:hidden;"
  >-->
  <div style="height: 100%; width: 100%; overflow-y:hidden;  overflow-x:hidden;">
    <div style="height: 100%; width: 100%; overflow-y:hidden;" v-if="hidden == true">
      <div class="full-width">
        <div
          style="background-color:#F0F3F4;width: 100%;font-weight: bold; height: 100%; text-align: center;font-size: 50px;padding-top: 50px;"
        >
          <!-- <img src="anh/logovuong.png"
          style="width: 150px; height: 120px; padding-bottom: 25px">-->
          <div style="padding-bottom: 20px; cursor: pointer" @click="showDiem = !showDiem">
            <img
              src="https://res.cloudinary.com/dsobei3hp/image/upload/v1583684727/hoithi/london-eye_wy9kui.png"
              style="height: 50px; width: auto"
            />
          </div>
          <div v-show="showDiem">
            <h4
              style="font-family: 'time new roman';font-weight: bold; text-align: center;font-size: 50px; color: black"
            >KẾT QUẢ THI</h4>
            <div class="col-md-10" style="margin: auto; margin-top: 100px">
              <div class="row">
                <div
                  style="background-color: #21618C;border-radius: 10px; width: 250px; height: 200px; margin: auto; text-align: center;"
                >
                  <p
                    style="font-size: 35px; font-family:'time new roman'; font-weight: bold;color:white "
                  >ĐỘI 1</p>
                  <p
                    style="font-size:70px; font-family:'time new roman'; font-weight: bold;color:white"
                  >{{ this.team1 }}</p>
                </div>
                <div
                  style="background-color: #CB4335;border-radius: 10px; width: 250px; height: 200px; margin: auto;  text-align: center"
                >
                  <p
                    style="font-size: 35px; font-family:'time new roman'; font-weight: bold;color:white "
                  >ĐỘI 2</p>
                  <p
                    style="font-size:70px; font-family:'time new roman'; font-weight: bold;color:white"
                  >{{ this.team2 }}</p>
                </div>
                <div
                  style="background-color: #239B56; border-radius: 10px; width: 250px; height: 200px; margin: auto;  text-align: center"
                >
                  <p
                    style="font-size: 35px; font-family:'time new roman'; font-weight: bold;color:white "
                  >ĐỘI 3</p>
                  <p
                    style="font-size:70px; font-family:'time new roman'; font-weight: bold;color:white"
                  >{{ this.team3 }}</p>
                </div>
              </div>
              <br />
              <br />
              <br />
            </div>
          </div>
          <div v-show="!showDiem">
            <!-- <img
              style="height: 60%; width: auto"
              src="https://res.cloudinary.com/dsobei3hp/image/upload/v1583509864/hoithi/undraw_anonymous_feedback_y3co_uqvf7s.png"
            />-->
            <img
              style="height: 65%; width: auto"
              src="https://res.cloudinary.com/dsobei3hp/image/upload/v1575541418/hoithi/logovuong_x7frmn.gif"
            />
            <br />
            <br />
          </div>

          <div class="row">
            <button
              type="button"
              style="margin: auto; background-color:#3498DB; font-size: 18px;height: 100px; width: 250px;border-radius: 50px; font-family:'time new roman'; font-weight: bold; color:black"
              class="btn btn-dark"
              @click="resetContinute"
            >LƯỢT CHƠI MỚI</button>
            <button
              type="button"
              style="margin: auto; font-size: 18px;height: 100px; background-color:#F5B041; width: 250px;border-radius: 50px; font-family:'time new roman'; font-weight: bold; color: black"
              class="btn btn-dark"
              @click="chongoi"
            >TIẾP TỤC</button>
          </div>
        </div>
      </div>
    </div>
    <div
      v-if="hidden == false"
      style="height: 100%; width: 100%; overflow-y:hidden; overflow-x:hidden;"
    >
      <div class="row" style="margin: 0 auto; margin-top: 15px;height: 5%; margin-bottom: 70px;">
        <div class="col-md-3" style="margin: 0 auto; cursor: pointer;">
          <div
            @click="runTime"
            v-bind:class="{
                            'bor-max-height': height_a,
                            'bor-min-height': height_b
                        }"
            class="row"
            style="margin: auto; margin-top: 10px; cursor: pointer;"
          >
            <!-- <div
              style="padding-top:55px;width: 210px; height: 210px; margin-left:25px; text-align:center;background-image:url('https://res.cloudinary.com/dsobei3hp/image/upload/v1575541417/hoithi/dongho_mv6mjb.png'); background-size:100% 100%;color: white; font-family: 'Tahoma';font-weight: bold;font-size: 72px;"
            >{{totalTime }}</div>-->
            <div
              style="padding-top:30px;width: 210px; height: 210px; margin-left:25px; text-align:center;border: 4px solid #1F618D ; border-radius: 50%; background-size:100% 100%;color: black; font-family: 'Tahoma';font-weight: bold;font-size: 100px;"
            >{{ totalTime }}</div>
          </div>
        </div>
        <div
          class="col-md-9"
          style="margin: 0 auto;color: #111F78 ; font-family: 'Garamond';font-weight: bold; font-size: 65px; text-align:center; text-shadow: 3px 3px #909497 ;"
        >
          PHẦN THI TRẮC NGHIỆM
          <!-- <span style=" color: red;">PHẦN THI</span>
          <span
            style="color: #03289C; padding-left: 20px; padding-right: 20px; border: 2px solid black; border-radius: 50px; background-color:#adf"
          >TRẮC NGHIỆM</span>-->
        </div>
      </div>
      <div class="row" style="margin-top: 10px;height: 90%">
        <div class="col-md-3" style="padding-top: 150px;">
          <div class="row bor-min-height" style="margin: auto;">
            <div
              v-if="teamAct != 1"
              class="point-width"
              style="box-shadow: 1px 2px #909497; border: 1px solid #CCD1D1; background-image: linear-gradient(#ABE183, #9AE066, #588A33); margin:0px auto; border-radius: 50%; margin-right:5px; margin-left: 20px; text-align:center"
            >
              <div
                v-bind:class="{
                                    'teampoint-fullwidth': height_a,
                                    'teampoint-width': height_b
                                }"
                style="color: white; font-family: 'Tahoma';font-weight: bold;font-size: 30px; padding-top: 15px"
              >{{ this.team1 }}</div>
            </div>
            <img
              v-if="teamAct == 1"
              src="https://res.cloudinary.com/dsobei3hp/image/upload/v1581500420/hoithi/source_txcynv.gif"
              style="margin-right:5px; margin-left: 20px; height: 80px; width: 80px"
            />
            <div
              style="box-shadow: 4px 4px #909497; background-image: linear-gradient(to right, #ABE183, #9AE066, #588A33); margin-top: 10px;text-align:center; font-family: 'Tahoma';font-weight: bold;font-size: 18px; color: white; padding-top:12px; border: 1px solid #BFC9CA; border-radius: 10px; cursor: pointer;"
              @click="activePoint(1)"
              v-bind:class="{ boder: teamAct == 1 }"
              class="team-min-height"
            >ĐỘI 1</div>
            <!-- <div v-if="teamAct==1"><img src="https://res.cloudinary.com/dsobei3hp/image/upload/v1575541416/hoithi/bell2_v3bat1.gif"
                                                    style="width: 60px; height: 60px;margin-top: 15px; margin-left: 0px;object-fit: fill"/>
            </div>-->
          </div>
          <br />
          <div class="row bor-min-height" style="margin: auto;">
            <div
              v-if="teamAct != 2"
              class="point-width"
              style="box-shadow: 2px 4px #909497; border: 1px solid CCD1D1; background-image: linear-gradient( #EC7063 , #C0392B, #B03A2E); margin:0px auto; border-radius: 50%; margin-right:5px; margin-left: 20px; text-align:center"
            >
              <div
                v-bind:class="{
                                    'teampoint-fullwidth': height_a,
                                    'teampoint-width': height_b
                                }"
                style="color: white; font-family: 'Tahoma';font-weight: bold;font-size: 30px; padding-top: 15px"
              >{{ this.team2 }}</div>
            </div>
            <img
              v-if="teamAct == 2"
              src="https://res.cloudinary.com/dsobei3hp/image/upload/v1581500420/hoithi/source_txcynv.gif"
              style="margin-right:5px; margin-left: 20px; height: 80px; width: 80px"
            />
            <div
              style="box-shadow: 4px 4px #909497; cursor: pointer; background-color: #C0392B ;background-size:100% 100%; margin-top: 10px; text-align:center; font-family: 'Tahoma';font-weight: bold;font-size: 18px; color: white; padding-top:12px; border: 1px solid #99A3A4; border-radius: 10px"
              @click="activePoint(2)"
              v-bind:class="{ boder: teamAct == 2 }"
              class="team-min-height"
            >ĐỘI 2</div>
          </div>
          <br />
          <div class="row bor-min-height" style="margin: auto;">
            <div
              v-if="teamAct != 3"
              class="point-width"
              style="box-shadow: 2px 4px #909497; border: 1px solid #99A3A4; background-image: linear-gradient(#4187d5, #3968aa, #21618C ); margin:0px auto; border-radius: 50%; margin-right:5px; margin-left: 20px; text-align:center"
            >
              <div
                class="teampoint-width"
                style="color: white; font-family: 'Tahoma';font-weight: bold;font-size: 30px"
              >{{ this.team3 }}</div>
            </div>
            <img
              v-if="teamAct == 3"
              src="https://res.cloudinary.com/dsobei3hp/image/upload/v1581500420/hoithi/source_txcynv.gif"
              style="margin-right:5px; margin-left: 20px; height: 80px; width: 80px"
            />

            <div
              style="box-shadow: 4px 4px #909497; cursor: pointer; background-image: linear-gradient(#4187d5, #3968aa, #21618C ); background-size:100% 100%; margin-top: 10px; text-align:center; font-family: 'Tahoma';font-weight: bold;font-size: 18px; color: white; padding-top:12px; border: 1px solid 99A3A4; border-radius: 10px"
              @click="activePoint(3)"
              v-bind:class="{ boder: teamAct == 3 }"
              class="team-min-height"
            >ĐỘI 3</div>
          </div>
          <br />
          <div
            class="row"
            @click="chonKhanGia"
            style="margin: auto; margin-left:30px; cursor: pointer"
          >
            <img
              src="https://res.cloudinary.com/dsobei3hp/image/upload/v1583167257/hoithi/undraw_fans_gr54__1_-removebg-preview_asoeo2.png"
              style="height: 100px; width: auto"
              v-if="!khanGia"
            />
            <img
              src="https://res.cloudinary.com/dsobei3hp/image/upload/v1583167255/hoithi/source_ltzcjy.gif"
              style="height: 100px; width: auto"
              v-if="khanGia"
            />
          </div>
          <!-- <div v-bind:class="{'bor-max-height':height_a,'bor-min-height':height_b}" class="row"
                         style="margin: auto; margin-top: 10px; " @click="runTime">
                        <div
                            style="padding-top:55px;width: 210px; height: 210px; margin:auto; text-align:center;background-image:url('/anh/dongho.png'); background-size:100% 100%;color: white; font-family: 'Tahoma';font-weight: bold;font-size: 72px;">
                            {{totalTime }}
                        </div>
          </div>-->
          <div class="col-md-12" style="margin-top:30px;">
            <button
              style="font-weight: bold; font-family: 'time new roman'; float: left"
              type="button"
              class="btn btn-success"
              data-toggle="modal"
              data-target="#exampleModalCenter"
              @click="addPoint"
              v-bind:class="{ 'btn-max-height': height_a }"
            >KẾT QUẢ</button>
            <button
              style="font-family: 'time new roman'; float: right"
              type="button"
              class="btn btn-danger"
              @click="next"
              v-bind:class="{ 'btn-max-height': height_a }"
            >{{ this.continute }}</button>
          </div>
        </div>
        <div class="col-md-9" style="margin: 0 auto; text-align:center">
          <div class="row" style="margin: 0 auto; text-align:center">
            <div class="col-md-12" style="margin: 0 auto; margin-bottom: 10px; ">
              <button
                type="button"
                class="btn btn-warning"
                v-if="packageDetail"
                style="color: white; font-family: 'Tahoma';font-weight: bold;font-size: 18 px; background-image: linear-gradient(to bottom right, #2C93D8 , #075E98 );; border-radius: 10px"
              >GÓI CÂU HỎI SỐ {{ this.packageDetail.name }}</button>
              <button
                style="background-color:#2E86C1; width:40px;height:40px;margin-right:10px;font-weight: bold;border-radius:10px; border: 2px solid white;"
                type="button"
                class="btn btn-primary"
                v-for="(item, index) in question_data"
                v-bind:key="item.id"
                @click="change_question(index)"
                v-bind:class="{ red: index <= turn }"
              >
                <p>
                  <span style="color: white;">
                    {{
                    index + 1
                    }}
                  </span>
                </p>
              </button>
            </div>
            <div
              class="col-md-12 min-height"
              v-if="question_data.length > 0 && check"
              style="margin-top: 20px;display: inline-block; border: 6px double white; border-radius: 30px;background-image: linear-gradient(to right, #283747, #072B6C, #0E195F);background-size:100% 100%; "
            >
              <div
                v-for="(item, index) in question_data"
                v-bind:key="item.id"
                v-if="index == turn"
                style="color: white;font-size: 28px;"
              >
                <!-- <div style="color: white; font-family:'time new roman'; font-weight: bold;">
                  Câu {{index
                  +1}}
                </div>-->
                <p
                  class="cauhoi"
                  :style="{fontSize: tinhFontSizeCauHoi(item.name.length)}"
                >{{ item.name }}</p>
              </div>
            </div>
            <div
              class="col-md-12"
              v-if="question_data.length > 0 && !check"
              style="display: inline-block; height: 320px"
            >
              <div
                v-for="(item, index) in question_data"
                v-bind:key="item.id"
                v-if="index == turn"
                style="color: black; font-size: 14px; font-weight: bold"
              >
                <div
                  style="width: 100%; border: 2px solid black;text-align: justify; background-image: linear-gradient(to right, #283747, #072B6C, #0E195F); color: white"
                >
                  <div
                    class="cauhoihinhanh"
                    :style="{fontSize: tinhFontSizeCauHoiHinhAnh(item.name.length)}"
                  >{{ item.name }}</div>
                </div>
                <div>
                  <!-- <a :href="item.image_url" target="_blank">
                    <img :src="item.image_url" style="height: 86%; width: 100%" />
                  </a>-->

                  <a data-toggle="modal" data-target="#exampleModalCenterImage">
                    <img :src="item.image_url" style="height: 86%; width: 100%" />
                  </a>
                  <div
                    class="modal fade"
                    id="exampleModalCenterImage"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="exampleModalCenterTitle"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog modal-dialog-centered" style="max-width: 90vw;">
                      <img :src="item.image_url" style="width: 100%; max-height: 90vh" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12" style="height: 100%;">
              <div>
                <div
                  style="width: 100%;float: left; background-color: #ffffff00"
                  class="grid-container"
                  v-for="(item, index) in question_data"
                  v-bind:key="item.id"
                  v-if="index == turn"
                >
                  <button
                    type="button"
                    class="btn btn-primary answer-min-height dapAn"
                    v-for="(data, ind) in item.answer"
                    @click="addAnswer(data, ind, index)"
                    v-bind:key="data.id"
                    v-bind:class="{
                                            'ind--0': ind === onclick
                                        }"
                  >
                    <!-- <div
                      style="color: white; margin-left: 20px; margin-bottom: 20px; float: left; font-weight: bold; font-size: 42px; border: 5px solid white; background-color: #066F4D; width: 100px; height: 100px; border-radius: 50%; line-height: 90px"
                    >{{data.phuong_an}}</div>-->
                    <div style="float: left; text-align: justify;">
                      <span
                        :style="{
                                                    fontSize: tinhFontSize(
                                                        data.name.length
                                                    )
                                                }"
                      >{{ data.phuong_an }}.</span>
                      <span
                        :style="{
                                                    fontSize: tinhFontSize(
                                                        data.name.length
                                                    )
                                                }"
                      >
                        {{ data.name }}
                      </span>
                    </div>
                  </button>

                  <div
                    class="modal fade"
                    id="exampleModalCenter"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="exampleModalCenterTitle"
                    aria-hidden="true"
                    v-if="
                                            tinker == false &&
                                                teamAct != undefined
                                        "
                  >
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                          >
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div
                          class="modal-body"
                          style="width: 500px;height: 500px;font-size: 30px;text-align: center"
                        >
                          <img
                            :src="
                                                            anhSai[numberRandom]
                                                        "
                            style="width: 350px;height: 300px;"
                          />
                          <br />
                          <h2
                            style="font-family:'time new roman'; font-weight: bold;"
                          >KHÔNG CHÍNH XÁC</h2>
                          <p>+ 0</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div
                    class="modal fade"
                    id="exampleModalCenter"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="exampleModalCenterTitle"
                    aria-hidden="true"
                    v-if="
                                            tinker == true &&
                                                teamAct != undefined
                                        "
                  >
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                          >
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div
                          class="modal-body"
                          style="width: 500px;height: 450px;font-size: 30px;text-align: center"
                        >
                          <img
                            :src="
                                                            anhDung[
                                                                numberRandom
                                                            ]
                                                        "
                            style="width: 350px;height: 300px;"
                          />
                          <br />

                          <h2
                            style="font-family:'time new roman'; font-weight: bold;"
                          >ĐÁP ÁN CHÍNH XÁC</h2>
                          <p>+ 10</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div
                    class="modal fade"
                    id="exampleModalCenter"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="exampleModalCenterTitle"
                    aria-hidden="true"
                    v-if="
                                            tinker == false && khanGia == true
                                        "
                  >
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                          >
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div
                          class="modal-body"
                          style="width: 500px;height: 500px;font-size: 30px;text-align: center"
                        >
                          <img
                            :src="
                                                            anhSai[numberRandom]
                                                        "
                            style="width: 350px;height: 300px;"
                          />
                          <br />
                          <h2
                            style="font-family:'time new roman'; font-weight: bold;"
                          >KHÔNG CHÍNH XÁC</h2>
                          <p>+ 0</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div
                    class="modal fade"
                    id="exampleModalCenter"
                    tabindex="-1"
                    role="dialog"
                    aria-labelledby="exampleModalCenterTitle"
                    aria-hidden="true"
                    v-if="tinker == true && khanGia == true"
                  >
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                          >
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div
                          class="modal-body"
                          style="width: 500px;height: 450px;font-size: 30px;text-align: center"
                        >
                          <img
                            :src="
                                                            anhDung[
                                                                numberRandom
                                                            ]
                                                        "
                            style="width: 350px;height: 300px;"
                          />
                          <br />
                          <h2
                            style="font-family:'time new roman'; font-weight: bold;"
                          >ĐÁP ÁN CHÍNH XÁC</h2>
                          <p>+ 10</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap/dist/js/bootstrap.min";
import Vue from "vue";
import CircularCountDownTimer from "vue-circular-count-down-timer";

Vue.use(CircularCountDownTimer);
import vueAwesomeCountdown from "vue-awesome-countdown";

Vue.use(vueAwesomeCountdown, "vac");

export default {
  props: ["question", "old_id"],
  name: "question",
  data: function() {
    return {
      showDiem: false,
      khanGia: false,
      statusaudio: false,
      audiodongho: undefined,
      loading: false,
      isLoading: true,
      onclick: undefined,
      timer: null,
      resetButton: false,
      reset: false,
      turn: 0,
      teamAct: undefined,
      team1: 0,
      team2: 0,
      team3: 0,
      time: 60,
      time_start: true,
      question_data: [],
      continute: "KẾ TIẾP",
      restart: undefined,
      disable: undefined,
      current_answer: undefined,
      success: false,
      tinker: false,
      answer: undefined,
      ind: undefined,
      index: undefined,
      hidden: true,
      totalTime: 10,
      hidden: false,
      packageDetail: undefined,
      height_a: undefined,
      height_b: undefined,
      numberRandom: 0,
      anhSai: [
        "https://res.cloudinary.com/dsobei3hp/image/upload/v1583769939/hoithi/attachment_3713250_yerjzl.gif",
        "https://res.cloudinary.com/dsobei3hp/image/upload/v1583768584/hoithi/71c76025a232b42e8a458ac1656cab65_ybvrwr.gif",
        "https://res.cloudinary.com/dsobei3hp/image/upload/v1583768582/hoithi/HsUNv_tbfqlv.gif",
        "https://res.cloudinary.com/dsobei3hp/image/upload/v1583769938/hoithi/ed1e81dd9cbfbfab1e5c70e7c143dbef_yfxpmv.gif",
        "https://res.cloudinary.com/dsobei3hp/image/upload/v1583769936/hoithi/picture-of-shocked-face-6_lulwz9.gif"
      ],
      anhDung: [
        "https://res.cloudinary.com/dsobei3hp/image/upload/v1583770445/hoithi/trump_Yes_sjsiwo.gif",
        "https://res.cloudinary.com/dsobei3hp/image/upload/v1583770455/hoithi/giphy_rp85ty.gif",
        "https://res.cloudinary.com/dsobei3hp/image/upload/v1583768585/hoithi/tenor_vgzb33.gif",
        "https://res.cloudinary.com/dsobei3hp/image/upload/v1583770447/hoithi/tenor_2_elybag.gif",
        "https://res.cloudinary.com/dsobei3hp/image/upload/v1583770624/hoithi/giphy_1_avfpgu.gif"
      ]
    };
  },
  created() {
    this.tinker = false;
    this.answer = undefined;
  },
  mounted() {
    if (window.innerHeight >= 667) {
      this.height_a = true;
      this.height_b = false;
    } else {
      this.height_a = false;
      this.height_b = true;
    }
    axios.get("/getdetailpackage/" + this.old_id).then(res => {
      this.packageDetail = res.data.result;
    });
    axios.get("/gettotalpoint/" + this.old_id).then(res => {
      var data = res.data.result;
      this.team1 = data.total_point1;
      this.team2 = data.total_point2;
      this.team3 = data.total_point3;
    });
    this.question_data = this.question;
    this.timer = setInterval(() => this.countdown(), 1000);
    this.stopTimer();
    this.resetButton = true;
    this.question_data.forEach(el => {
      el.answer.forEach((item, index, arr) => {
        if (index == 0) {
          arr[index].phuong_an = "A";
        }
        if (index == 1) {
          arr[index].phuong_an = "B";
        }
        if (index == 2) {
          arr[index].phuong_an = "C";
        }
        if (index == 3) {
          arr[index].phuong_an = "D";
        }
      });
    });
  },
  computed: {
    check() {
      if (this.question_data[this.turn].image_url) {
        console.log(1);
        return false;
      } else {
        console.log(2);
        return true;
      }
    },
    minutes: function() {
      const minutes = Math.floor(this.totalTime / 60);
      return this.padTime(minutes);
    },
    seconds: function() {
      const seconds = this.totalTime - this.minutes * 60;
      return this.padTime(seconds);
    }
  },
  methods: {
    tinhFontSizeCauHoi(length) {
      if (length) {
        if (length <= 10) return "68px";
        if (10 < length && length <= 20) return "60px";
        if (20 < length && length <= 38) return "56px";
        if (38 < length && length <= 60) return "50px";
        if (60 < length && length <= 90) return "46px";
        if (90 < length && length <= 100) return "40px";
        if (100 < length && length <= 190) return "36px";
        return "32px";
      } else return "32px";
    },
    tinhFontSizeCauHoiHinhAnh(length) {
      if (length) {
        if (length <= 10) return "55px";
        if (10 < length && length <= 20) return "44px";
        if (20 < length && length <= 40) return "38px";
        if (40 < length && length <= 60) return "30px";
        if (60 < length && length <= 80) return "20px";
        return "16px";
      } else return "16px";
    },
    tinhFontSize(length) {
      if (length) {
        if (length <= 10) return "46px";
        if (10 < length && length <= 20) return "38px";
        if (20 < length && length <= 38) return "34px";
        if (38 < length && length <= 60) return "34px";
        if (60 < length && length <= 90) return "28px";
        if (90 < length && length <= 100) return "24px";
        return "22px";
      } else return "22px";
    },
    chonKhanGia() {
      this.khanGia = !this.khanGia;
      if (this.khanGia) {
        this.teamAct = undefined;
        this.border = false;
      }
    },
    change_question(index) {
      this.turn = index;
      this.success = false;
    },
    runTime() {
      if (this.loading == false) {
        this.startTimer();
        this.loading = true;
      } else {
        this.stopTimer();
        this.loading = false;
      }
    },
    startTimer: function() {
      this.playSoundTickTock();
      this.timer = setInterval(() => this.countdown(), 1000);
      this.resetButton = true;
    },
    stopTimer: function() {
      if (this.statusaudio == true) {
        this.audiodongho.pause();
      }
      clearInterval(this.timer);
      this.timer = null;
      this.resetButton = true;
    },
    resetTimer: function() {
      if (this.statusaudio == true) {
        this.audiodongho.pause();
      }
      this.totalTime = 10;
      clearInterval(this.timer);
      this.timer = null;
      this.resetButton = false;
    },
    padTime: function(time) {
      return (time < 10 ? "0" : "") + time;
    },
    countdown: function() {
      if (this.totalTime >= 1) {
        this.totalTime--;
      } else {
        this.totalTime = 0;
        this.resetTimer();
      }
    },
    addAnswer(answer, ind, index) {
      this.onclick = ind;
      // if (this.teamAct != undefined) {
      if (this.loading) {
        this.stopTimer();
        this.loading = false;
      }
      this.answer = answer;
      this.ind = ind;
      this.index = index;
      // }
      this.mauvang = !this.mauvang;
    },
    next() {
      this.numberRandom = Math.floor(Math.random() * 5);
      console.log("random", this.numberRandom);
      this.khanGia = false;
      this.loading = false;
      this.onclick = undefined;
      this.answer = undefined;
      this.ind = undefined;
      this.index = undefined;
      this.success = false;
      this.isLoading = true;
      if (this.turn < this.question_data.length - 1) {
        this.turn = this.turn + 1;
        if (this.turn == this.question_data.length - 1) {
          this.continute = " KẾT THÚC";
        }
      } else {
        this.hidden = true;
      }
      this.totalTime = 10;
      this.resetTimer();
      this.teamAct = undefined;
    },
    playsound() {
      var audio = new Audio("/sound/dung.mp3"); // path to file
      audio.play();
      var audio = new Audio("/sound/votay.mp3"); // path to file
      audio.play();
    },
    playSoundError() {
      var audio = new Audio("/sound/sai.mp3"); // path to file
      audio.play();
    },
    playSoundTickTock() {
      this.audiodongho = new Audio("/sound/ticktock.mp3");
      this.statusaudio = true;
      this.audiodongho.play();
    },
    activePoint(team) {
      this.khanGia = false;
      if (this.teamAct == team && this.teamAct != undefined) {
        this.teamAct = undefined;
        this.time_start = false;
        this.stopTimer();
        this.border = !this.border;
        this.loading = false;
      } else if (this.teamAct == undefined) {
        if (this.loading) {
          this.stopTimer();
          this.loading = false;
        }
        this.teamAct = team;
        this.border = !this.border;
        this.time_start = true;
      } else if (this.teamAct != team && this.teamAct != undefined) {
        if (this.loading) {
          this.stopTimer();
          this.loading = false;
        }
        this.teamAct = team;
        this.loading = false;
        this.border = !this.border;
      } else {
        this.teamAct = team;
        this.ads = true;
        this.time_start = false;
        this.loading = false;
        this.stopTimer();
      }
    },
    addPoint() {
      this.onclick = undefined;
      if (this.teamAct != undefined) {
        if (this.success == false) {
          if (this.current_answer == undefined) {
            this.current_answer = this.answer;
            if (this.answer.dap_an == 1) {
              this.tinker = true;
              if (this.teamAct == 1) {
                this.team1 = this.team1 + 10;
              }
              if (this.teamAct == 2) {
                this.team2 = this.team2 + 10;
              }
              if (this.teamAct == 3) {
                this.team3 = this.team3 + 10;
              }
              this.success = true;
              this.question_data[this.index].answer = [this.answer];
              this.playsound();
              this.isLoading = false;
            } else {
              this.tinker = false;
              this.playSoundError();
              // this.question_data[this.index].answer.splice(this.ind, 1)
            }
          } else {
            if (this.current_answer !== this.answer) {
              this.current_answer = this.answer;
              if (this.answer.dap_an == 1) {
                this.tinker = true;
                if (this.teamAct == 1) {
                  this.team1 = this.team1 + 10;
                }
                if (this.teamAct == 2) {
                  this.team2 = this.team2 + 10;
                }
                if (this.teamAct == 3) {
                  this.team3 = this.team3 + 10;
                }
                this.success = true;
                this.question_data[this.index].answer = [this.answer];
                this.playsound();
                this.isLoading = false;
              } else {
                this.tinker = false;
                this.playSoundError();
                // this.question_data[this.index].answer.splice(this.ind, 1)
              }
            }
          }
          this.hidden == false;
        }
      } else if (this.khanGia) {
        if (this.success == false) {
          if (this.current_answer == undefined) {
            this.current_answer = this.answer;
            if (this.answer.dap_an == 1) {
              this.tinker = true;
              this.success = true;
              this.question_data[this.index].answer = [this.answer];
              this.playsound();
              this.isLoading = false;
              // this.khanGia = false
            } else {
              this.tinker = false;
              this.playSoundError();
              // this.question_data[this.index].answer.splice(this.ind, 1)
            }
          } else {
            if (this.current_answer !== this.answer) {
              this.current_answer = this.answer;
              if (this.answer.dap_an == 1) {
                this.tinker = true;
                this.success = true;
                this.question_data[this.index].answer = [this.answer];
                this.playsound();
                this.isLoading = false;
                // this.khanGia = false
              } else {
                this.tinker = false;
                this.playSoundError();
                // this.question_data[this.index].answer.splice(this.ind, 1)
              }
            }
          }
          this.hidden == false;
        }
      }
      //   this.activePoint(this.teamAct);
    },
    timeStart() {
      return restart;
    },
    chongoi() {
      axios
        .post("/updatepoint/" + this.old_id, {
          point1: this.team1,
          point2: this.team2,
          point3: this.team3
        })
        .then(res => {
          window.location.href = "/getallpackge/" + this.old_id;
        });
    },
    resetContinute() {
      axios.post("/resetpoint/" + this.old_id).then(res => {
        window.location.href = "/getallpackge/" + this.old_id;
      });
    }
  }
};
</script>

<style scoped>
.grid-container {
  display: grid;
  grid-column-gap: 50px;
  grid-row-gap: 10px;
  grid-template-columns: auto auto;
  padding: 10px;
  clear: both;
  background-color: white;
}

.ind--0 {
  background-image: url("https://res.cloudinary.com/dsobei3hp/image/upload/v1583939700/hoithi/sup_14_forsythia_yellow_euhsx0.jpg") !important;
  color: black !important;
  font-weight: bold;
}

#seconds {
  font-size: 55px;
  line-height: 1;
  font-weight: bold;
}

.boder {
  border: 4px white solid;
}

.red {
  background-color: #eb890b !important;
}

.min-height {
  height: 180px;
  margin-bottom: 25px;
}
.answer-min-height {
  height: 160px;
  border-radius: 40px;
}
.point-width {
  width: 100px;
  height: 80px;
}
.bor-min-height {
  height: 15%;
}

.team-min-height {
  width: 130px;
  height: 60px;
}
.teampoint-width {
  padding-top: 15px;
}

.dapAn {
  box-shadow: 2px 2px #888888;
  border-radius: 25px;
  width: 32vw;
  font-family: "time new roman";
  color: white;
  font-weight: bold;
  font-size: 20px;
  background-color: #3968aa;
  background-image: linear-gradient(#4187d5, #3968aa, #21618c);
  background-size: 100% 100%;
  border: 1px solid #21618c;
}
.cauhoi {
  font-family: "time new roman";
  font-size: 30px;
  float: left;
  padding-top: 10px;
  text-align: justify;
}
.cauhoihinhanh {
  font-family: "time new roman";
  font-size: 20px;
  padding-left: 10px;
}
</style>

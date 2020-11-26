<template>
  <div>
    <div class="d-flex focom-vehicle-images-section">

      <div class="focom-reset-padding pr-3">
        <div class="focom-vehicle-min-images mb-3 focom-mouse-hover-pointer">
          
            <img v-for="image in images" :key="image.path" alt=""
              class="rounded"
              @click="preview(image)"
              :src="`/storage/images/thumbnails/${image.path}`"
            />
         
          
        </div>
      </div>
      

      <div class="focom-reset-padding mt-n3 mx-n3 mt-md-0 mx-md-0">
        <span
          class="badge badge-dark font-weight-normal focom-gallery-indicator d-block d-md-none"
          >5 Fotos</span
        >
        <div
          class="carousel slide"
        >
          <div
            class="carousel-inner focom-vehicle-image-principal focom-mouse-hover-pointer"
          >
            <div
              class="carousel-item active"
              data-toggle="modal"
              data-target="#focomImagesFullWidth"
            >
              <img v-if="theImage.path"
                :src="`/storage/images/${theImage.path}`"
                alt=""
                data-holder-rendered="true"
              />
            </div>
            
          </div>

        
        </div>
      </div>
    </div>

    <div
      class="modal focom-full-gallery-backgroud focom-minwidth"
      id="focomImagesFullWidth"
      tabindex="-1"
      role="dialog"
      aria-labelledby="focomImagesFullWidth"
      aria-hidden="true"
    >
      <i
        class="fas fa-times fa-2x text-white focom-full-gallery-close carousel-control-next focomjsClose"
        data-dismiss="modal"
        aria-label="Close"
      ></i>
      <div
        id="focomImagesFullWidthGallery"
        class="carousel slide"
        data-ride="carousel"
        data-interval="false"
        data-touch="true"
        data-wrap="true"
      >
        <div
          class="carousel-inner focom-full-gallery d-flex align-items-center"
        >
            <img
                :src="`/storage/images/${theImage.path}`"
                data-src=""
                alt=""
                data-holder-rendered="true"
            />
          
    
        </div>
        
       
      </div>
    </div>
  </div>
</template>

<script>
export default {

    props: ['article'],
    data() {
        return {
            images: [],
            theImage: {}
        }
    },
    mounted(){

        this.getImages();

    },
    methods: {
        async getImages(){
             try {
                    let res = await fetch(`/api/articles/${this.article}/images`);
                    res = await res.json();
                    this.images = await res;
                    this.theImage = await this.images[0];
                    
                } catch (e) {
                    console.log(e);
            }
        },
        preview(image) {
            this.theImage = image;
        }
    }
};
</script>
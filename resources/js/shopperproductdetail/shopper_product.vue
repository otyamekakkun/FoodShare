<template>
    <div>
        <main>
            <div class="l-productdetail__area">
                <div class="c-productdetail__imgarea">
                    <h1 class="c-productdetail__title">
                        商品:No.{{ id }}の画像
                    </h1>
                    <img v-bind:src="img" class="c-productdetail__img" />
                </div>
                <button>
                    <a
                        class="btn_tw"
                        v-bind:href="`https://twitter.com/intent/tweet?text=商品名${name}について自由に記述しよう;`"
                        target="_blank_"
                        rel="nofollow"
                        ><i class="fab fa-twitter fa-fw"></i>
                        {{ name }}をシェアする</a
                    >

                    <!-- "`${product.id}}/shopper_productdetail`
                    
                    
                                                                    v-bind:href="`${product.id}}/shopper_productdetail`"

                    
                    
                    
                    -->
                </button>

                <div class="c-productdetail__listarea">
                    <h1 class="c-productdetail__listtitle">商品の内容</h1>
                    <ul class="c-productdetail__list">
                        <li class="c-productlist__items__listt__sentence">
                            ・商品名:{{ name }}
                        </li>
                        <li class="c-productlist__items__listt__sentence">
                            ・お値段:{{ price }}円
                        </li>
                        <li class="c-productlist__items__listt__sentence">
                            ・賞味期限:{{ best_by_date }}
                        </li>
                        <li class="c-productlist__items__listt__sentence">
                            ・出品された県名:{{ prefecture }}
                        </li>
                    </ul>
                </div>
            </div>
        </main>
    </div>
</template>
<script>
export default {
    props: [
        "id",
        "img",
        "name",
        "price",
        "best_by_date",
        "prefecture",
        "bought",
    ],
};
</script>

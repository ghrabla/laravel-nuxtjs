export const state = () => ({
  products : []
});

export const getters = {
  allproducts : state => state.products 
};

export const actions = {
  async fetchproducts({ commit }){
    const response = await this.$axios.$get(
      'api/products'
    );
    commit('setproducts',response);
    console.log(response)
  }
};

export const mutations = {
  setproducts : (state , products) => (state.products = products)
}
// export default{
//    state,
//    getters,
//    actions,
//    mutations
//  }
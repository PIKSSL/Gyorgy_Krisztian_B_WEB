class SzavakView{
    #szo;
    constructor(szo, parent){
        this.#szo = szo;
        parent.append(`
        <div id="szoo" class="szo${this.#szo.id}">
            <h3>${this.#szo.angol}</h3>
            <form><input class="mezo" type="text"></form>
            <img src="" style="display:hidden">
            `);


    }
    


}


export default SzavakView;
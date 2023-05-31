import SzavakView from "./SzavakView.js";

class SzotarView{
    #tema;
    constructor(szavak){
        $(".szavakMegjelenites").html(`
        <div class="oszlopNev"><h3>ANGOL</h3><h3>MAGYAR</h3><h5>Visszajelzés</h5></div>
        <div class="szavak">    
        </div>
        `);
        this.generalas(szavak,$('.szavak'));
    }

    generalas(szavak, parent){
        parent.html("");
        szavak.forEach(szo => {
            new SzavakView(szo, parent);
        });
    }
    temak(temak){
        this.temavalaszto=$(".temaValaszto");
        temak.forEach(tema => {
            this.temavalaszto.append(`
            <option value="${tema.id}" name="${tema.temanev}">${tema.temanev}</option>
            `)
        });
    }

}

export default SzotarView;
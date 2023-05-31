import SzotarModel from "../Model/SzotarModel.js";
import SzotarView from "../View/SzotarView.js";

class SzotarController{
    #model;
    #view;
    constructor(){
        this.#model = new SzotarModel();
        this.#model.get('/szavak',(data)=>{
            this.megjelenites(data);
        });

        $(".temaValaszto").change(()=>{
         this.id = $(".temaValaszto").find(":selected").val();
         if(this.id == 999){
            this.#model.get('/szavak', (data)=>{
                this.#view.generalas(data,$(".szavak"));
           });
         }else{
            this.#model.get('/szavak/tema/'+this.id, (data)=>{
                this.#view.generalas(data,$(".szavak"));
           });
         }

        });
    }
    megjelenites(szavak){
        this.#view = new SzotarView(szavak);
        this.#model.get("/tema",(data)=>{
            this.#view.temak(data);
        })
    }

}
export default SzotarController;
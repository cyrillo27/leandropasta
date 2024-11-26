import { IonTabs, 
    IonTab, 
    IonContent, 
    IonTabBar, 
    IonTabButton, 
    IonIcon,
    IonLabel,
    IonButton
 } from "@ionic/react";

import { bookOutline, easelOutline, heart } from 'ionicons/icons';
import Ilustra from "/public/Ilustra.svg";
import "./Inicio.scss";

const Inicio = () => {

    return (
        <IonContent>
            <div className="start-page">
                <div className="image">
                    <img src={Ilustra} alt="" />
                </div>
                <div className="info">
                    <h2>
                        <span>Seja bem-vindo </span>
                        <strong>O que deseja fazer?</strong>
                    </h2>
                    <div className="button-row">                            
                        <IonButton href="/listagem">
                            <div className="inner" >
                                <IonIcon icon={bookOutline}></IonIcon>
                                <IonLabel>Estudar</IonLabel>
                            </div>
                        </IonButton>
                        
                        <IonButton className="green" >
                            <div className="inner">                                
                                <IonIcon icon={easelOutline}></IonIcon>
                                <IonLabel>Dar aulas</IonLabel>
                            </div>
                        </IonButton>
                    </div>
                    <small>
                        Total de 285 conexões <br />
                        já realizadas  <IonIcon icon={heart}></IonIcon>
                    </small>
                </div>

            </div>
        </IonContent>
    )
}

export default Inicio;
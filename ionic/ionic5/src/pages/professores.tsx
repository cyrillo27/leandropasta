import { IonTabs, 
    IonTab, 
    IonContent, 
    IonTabBar, 
    IonTabButton, 
    IonIcon,
    IonLabel,
    IonButton
 } from "@ionic/react";

const Inicio = () => {

    return (
        <>
            <IonTabs>
                <IonTab tab="tab-01">
                   <IonContent>                                    
                        <IonButton>
                            Link
                        </IonButton>
                    </IonContent>               
                </IonTab>
                <IonTab tab="tab-02">
                   <IonContent>
                        Aba 2
                    </IonContent>               
                </IonTab>

                <IonTabBar slot="bottom">

                    <IonTabButton tab="tab-01">
                        <IonLabel>01</IonLabel>
                    </IonTabButton>

                    <IonTabButton tab="tab-02">
                        <IonLabel>02</IonLabel>
                    </IonTabButton>

                </IonTabBar>


            </IonTabs>
        </>
    )
}

export default Inicio;
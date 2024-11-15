import { IonContent, IonHeader, IonIcon, IonPage, IonTitle, IonToolbar } from '@ionic/react';
import { bookOutline } from 'ionicons/icons';
import "./Onboard.css";

function Onboard () {

    return (
        <IonContent fullscreen>
            <div className="onboard-page">
                <div className='header'>
                    <IonIcon icon={bookOutline}></IonIcon>
                </div>
                <div className='body-content'>
                    <div className='number'>
                    
                    </div>
                    <div className="desc">
                       
                    </div>
                </div>
                <div className='control'>
                    <ul className='dots'>
                        <li className='active'></li>
                        <li></li>
                    </ul>
                    <div className="arrow"></div>
                </div>
            </div>
        </IonContent>
    )
}

export default Onboard;
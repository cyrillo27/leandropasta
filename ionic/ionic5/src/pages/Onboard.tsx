import { IonContent, IonHeader, IonIcon, IonPage, IonTitle, IonToolbar } from '@ionic/react';
import { bookOutline, easelOutline } from 'ionicons/icons';
import BgTextura from "/public/onboard-background.svg";
import BgTextura2 from "/public/onboard-background-2.svg";
import { useEffect, useState } from 'react';
import "./Onboard.css";

function Onboard () {
    const [activeScreen, setActiveScreen] = useState(0);
    
    useEffect(() => {        

    })

    function closeOnBoard () {
       window.location.href = '/home'
    }
    
    function changeSlide () {
        if (activeScreen >= 1) {
            closeOnBoard();
            return;    
        }
        setActiveScreen(activeScreen + 1);
    }

    return (
        <IonContent fullscreen>

            <div className="onboard-screens">

                <div style={{zIndex: 2}} 
                    className={" onboard-page " + (activeScreen === 0 ? "active" : "")} 
                    onClick={() => changeSlide()}>
                    <div className='header'>
                        <img src={BgTextura} alt="" />
                        <IonIcon icon={bookOutline}></IonIcon>
                    </div>
                    <div className='body-content'>
                        <div className='number'>
                            01.
                        </div>
                        <div className="desc">
                            Encontre vários programadores par ensinar você
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
                
                <div className={" onboard-page second " + (activeScreen === 1 ? "active" : "")} 
                    onClick={() => changeSlide()}>
                    <div className='header'>
                        <img src={BgTextura2} alt="" />
                        <IonIcon icon={easelOutline}></IonIcon>
                    </div>
                    <div className='body-content'>
                        <div className='number'>
                            02.
                        </div>
                        <div className="desc">
                            Ou dê aulas
                            sobre o que você
                            mais conhece
                        </div>
                    </div>
                    <div className='control'>
                        <ul className='dots'>
                            <li ></li>
                            <li className='active'></li>
                        </ul>
                        <div className="arrow"></div>
                    </div>
                </div>

            </div>
        </IonContent>
    )
}

export default Onboard;
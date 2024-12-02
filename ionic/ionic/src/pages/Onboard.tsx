import { IonContent, IonHeader, IonPage, IonTitle, IonToolbar, IonFooter, IonIcon } from '@ionic/react';
import { homeOutline, libraryOutline } from 'ionicons/icons';
import './Onboard.css';

const Home = () => {
  return (
    <IonPage>
      <IonHeader>
        <IonToolbar>
          <IonTitle className="header-title">O Melhor do Pagode</IonTitle>
        </IonToolbar>
      </IonHeader>

      <IonContent fullscreen>
        <div className="background"></div>
        <div className="dropdown-container">
          <label htmlFor="pagode-options" className="dropdown-label">CDs de Pagode</label>
          <select id="pagode-options" className="dropdown">
            <option value="pixote">Pixote 15 Anos</option>
            <option value="exaltasamba">Exaltasamba ao Vivo</option>
            <option value="revelacao">Revelação 2003</option>
            <option value="sensacao">Sensação ao Vivo</option>
            <option value="raca-negra">Raça Negra ao Vivo</option>
          </select>
        </div>
      </IonContent>

      <IonFooter>
        <div className="footer">
          <div className="footer-item">
            <IonIcon icon={homeOutline} />
            <p>Início</p>
          </div>
          <div className="footer-item">
            <IonIcon icon={libraryOutline} />
            <p>Biblioteca</p>
          </div>
        </div>
      </IonFooter>
    </IonPage>
  );
};

export default Home;

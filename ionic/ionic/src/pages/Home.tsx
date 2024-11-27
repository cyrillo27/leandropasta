import {
  IonContent,
  IonFooter,
  IonHeader,
  IonIcon,
  IonPage,
  IonTitle,
  IonToolbar,
} from '@ionic/react';
import { homeOutline, libraryOutline } from 'ionicons/icons';
import { useHistory } from 'react-router-dom'; // Para navegação
import './Home.css';

const Home: React.FC = () => {
  const history = useHistory();

  return (
    <IonPage>
      <IonHeader>
        <IonToolbar>
          <IonTitle className="header-title">O Melhor do Pagode</IonTitle>
        </IonToolbar>
      </IonHeader>

      <IonContent fullscreen>
        <div className="dropdown-container">
          <label htmlFor="pagode-options" className="dropdown-label">
            CDs de Pagode
          </label>
          <select id="pagode-options" className="dropdown">
            <option value="pixote">Pixote 15 Anos</option>
            <option value="exaltasamba">Exaltasamba ao Vivo</option>
            <option value="revelacao">Revelação 2003</option>
            <option value="sensacao">Sensação ao Vivo</option>
          </select>
        </div>
      </IonContent>

      <IonFooter>
        <div className="footer">
          <div className="footer-item" onClick={() => history.push('/home')}>
            <IonIcon icon={homeOutline} />
            <p>Início</p>
          </div>
          <div className="footer-item" onClick={() => history.push('/biblioteca')}>
            <IonIcon icon={libraryOutline} />
            <p>Biblioteca</p>
          </div>
        </div>
      </IonFooter>
    </IonPage>
  );
};

export default Home;

import React, { useState } from 'react';
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
import { useHistory } from 'react-router-dom'; 
import './Home.css';

const Home: React.FC = () => {
  const history = useHistory();
  const [selectedCd, setSelectedCd] = useState('');

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
          <select
            id="pagode-options"
            className="dropdown"
            value={selectedCd}
            onChange={(e) => setSelectedCd(e.target.value)}
          >
            <option value="">Selecione um CD</option>
            <option value="pixote">Pixote 15 Anos</option>
            <option value="exaltasamba">Exaltasamba ao Vivo</option>
            <option value="revelacao">Revelação 2003</option>
            <option value="sensacao">Sensação ao Vivo</option>
          </select>
          {selectedCd && <p>Você selecionou: {selectedCd}</p>}
        </div>
      </IonContent>

      <IonFooter>
        <div className="footer">
          <button
            className="footer-item"
            onClick={() => history.push('/home')}
            aria-label="Ir para Início"
          >
            <IonIcon icon={homeOutline} />
            <p>Início</p>
          </button>
          <button
            className="footer-item"
            onClick={() => history.push('/biblioteca')}
            aria-label="Ir para Biblioteca"
          >
            <IonIcon icon={libraryOutline} />
            <p>Biblioteca</p>
          </button>
        </div>
      </IonFooter>
    </IonPage>
  );
};

export default Home;

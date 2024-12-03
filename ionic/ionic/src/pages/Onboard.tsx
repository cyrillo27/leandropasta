import React, { useState } from 'react';
import { IonContent, IonHeader, IonPage, IonTitle, IonToolbar, IonFooter, IonIcon, IonRouterLink } from '@ionic/react';
import { homeOutline, libraryOutline } from 'ionicons/icons';
import { useHistory } from 'react-router-dom'; 
import './Onboard.css';

const Home = () => {
  const [selectedCD, setSelectedCD] = useState<string>(''); 
  const history = useHistory(); 

  const handleChange = (event: React.ChangeEvent<HTMLSelectElement>) => {
    const cdValue = event.target.value;
    setSelectedCD(cdValue);
    console.log(`Você selecionou: ${cdValue}`);

   
    if (cdValue) {
      history.push(`/cd/${cdValue}`);
    }
  };

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
          <select 
            id="pagode-options" 
            className="dropdown" 
            value={selectedCD} 
            onChange={handleChange}
          >
            <option value="">Selecione um CD</option>
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
            <IonRouterLink href="/home">
              <IonIcon icon={homeOutline} />
              <p>Início</p>
            </IonRouterLink>
          </div>
          <div className="footer-item">
            <IonRouterLink href="/biblioteca">
              <IonIcon icon={libraryOutline} />
              <p>Biblioteca</p>
            </IonRouterLink>
          </div>
        </div>
      </IonFooter>
    </IonPage>
  );
};

export default Home;

import React, { useState } from 'react';
import { IonContent, IonHeader, IonPage, IonTitle, IonToolbar, IonFooter, IonIcon } from '@ionic/react';
import { homeOutline, libraryOutline } from 'ionicons/icons';
import { useHistory } from 'react-router-dom';
import './Onboard.css';

const Home: React.FC = () => {
  const [selectedCD, setSelectedCD] = useState<string>(''); 
  const history = useHistory();

  // Função para lidar com a mudança do dropdown
  const handleCDChange = (e: React.ChangeEvent<HTMLSelectElement>) => {
    const cdValue = e.target.value;
    setSelectedCD(cdValue);
    alert(`Você selecionou o CD: ${cdValue}`); 
  };

  // Função para navegação no footer
  const navigateTo = (route: string) => {
    history.push(route); // Navega para a página passada como parâmetro
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
            onChange={handleCDChange}
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

      {/* Footer com navegação */}
      <IonFooter>
        <div className="footer">
          <div className="footer-item" onClick={() => navigateTo('/')}>
            <IonIcon icon={homeOutline} />
            <p>Início</p>
          </div>
          <div className="footer-item" onClick={() => navigateTo('/biblioteca')}>
            <IonIcon icon={libraryOutline} />
            <p>Biblioteca</p>
          </div>
        </div>
      </IonFooter>
    </IonPage>
  );
};

export default Home;

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
  import './Biblioteca.css';
  
  const Biblioteca: React.FC = () => {
    const history = useHistory();
  
    return (
      <IonPage>
        <IonHeader>
          <IonToolbar>
            <IonTitle className="header-title">Biblioteca</IonTitle>
          </IonToolbar>
        </IonHeader>
  
        <IonContent fullscreen>
          <h2>Bem-vindo à Biblioteca de Pagode</h2>
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
  
  export default Biblioteca;
  
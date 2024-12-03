import React from 'react';
import { IonPage, IonHeader, IonToolbar, IonTitle, IonContent, IonButton } from '@ionic/react';
import './Biblioteca.css';

const Biblioteca: React.FC = () => {
  return (
    <IonPage>
      <IonHeader>
        <IonToolbar>
          <IonTitle>Biblioteca</IonTitle>
        </IonToolbar>
      </IonHeader>

      <IonContent fullscreen className="biblioteca-content">
        <h2 className="biblioteca-title">Bem-vindo à sua Biblioteca de Pagode</h2>

        {}
        <div className="cd-list">
          <IonButton expand="full" color="primary" className="cd-item">
            Pixote 15 Anos
          </IonButton>
          <IonButton expand="full" color="primary" className="cd-item">
            Exaltasamba ao Vivo
          </IonButton>
          <IonButton expand="full" color="primary" className="cd-item">
            Revelação 2003
          </IonButton>
          <IonButton expand="full" color="primary" className="cd-item">
            Sensação ao Vivo
          </IonButton>
          <IonButton expand="full" color="primary" className="cd-item">
            Raça Negra ao Vivo
          </IonButton>
        </div>
      </IonContent>
    </IonPage>
  );
};

export default Biblioteca;

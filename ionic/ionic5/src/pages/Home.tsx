import { IonContent, IonHeader, IonPage, IonButton, IonIcon, IonTitle, IonToolbar } from '@ionic/react';
//import ExploreContainer from '../components/ExploreContainer';
import './Home.css';

const Home = () => {
  return (
    <IonPage>

      <IonHeader>
        <IonToolbar>
          <IonTitle>Android</IonTitle>
        </IonToolbar>
      </IonHeader>

      <IonContent fullscreen>

        <IonHeader collapse="condense">
          <IonToolbar>
            <IonTitle>Ios</IonTitle>
          </IonToolbar>
        </IonHeader>
    
        <h1>Home page</h1>
        
      <IonButton expand="full">Full</IonButton>

      </IonContent>

    </IonPage>
  );
};

export default Home;

import { Route, Redirect } from 'react-router';
import { 
  IonApp, 
  IonRouterOutlet, 
  setupIonicReact, 
  IonTabs, 
  IonTabBar, 
  IonTabButton,
  IonIcon,
  IonLabel
} from '@ionic/react';
import { IonReactRouter } from '@ionic/react-router';
import { bookOutline, easelOutline } from 'ionicons/icons';

import Home from './pages/Home';
import Onboard from './pages/Onboard';
import Inicio from './pages/Inicio';

/* Core CSS required for Ionic components to work properly */
import '@ionic/react/css/core.css';

/* Basic CSS for apps built with Ionic */
import '@ionic/react/css/normalize.css';
import '@ionic/react/css/structure.css';
import '@ionic/react/css/typography.css';

/* Optional CSS utils that can be commented out */
import '@ionic/react/css/padding.css';
import '@ionic/react/css/float-elements.css';
import '@ionic/react/css/text-alignment.css';
import '@ionic/react/css/text-transformation.css';
import '@ionic/react/css/flex-utils.css';
import '@ionic/react/css/display.css';

/**
 * Ionic Dark Mode
 * -----------------------------------------------------
 * For more info, please see:
 * https://ionicframework.com/docs/theming/dark-mode
 */

/* import '@ionic/react/css/palettes/dark.always.css'; */
/* import '@ionic/react/css/palettes/dark.class.css'; */
import '@ionic/react/css/palettes/dark.system.css';

/* Theme variables */
import './theme/variables.css';

setupIonicReact();


//
//
const App = () => {
  return (
    <IonApp>

      <IonReactRouter> 
        <IonTabs>   
          
          <IonRouterOutlet>            
            <Redirect exact={true} path='/' to="/onboard" />
            <Route  path="/onboard" render={() => <Onboard /> } />             
            <Route  path="/home" render={() => <Inicio />  } />
          </IonRouterOutlet>

          {
            false && <IonTabBar slot="bottom">

            <IonTabButton tab="onboard" href="/onboard">
              <IonIcon icon={easelOutline}></IonIcon>
              <IonLabel>Onboard</IonLabel>
            </IonTabButton>

            <IonTabButton tab="home" href="/home">
              <IonIcon icon={bookOutline}></IonIcon>
              <IonLabel>Home</IonLabel>
            </IonTabButton>

          </IonTabBar>
          }
        </IonTabs>    

      </IonReactRouter>


    </IonApp>
  )
};

export default App;

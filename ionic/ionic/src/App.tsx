import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';
import Home from './pages/Home';
import Biblioteca from './pages/Biblioteca';
import Login from './pages/login';

const App: React.FC = () => (
  <Router>
    <Switch>
      <Route exact path="/" component={Home} />
      <Route path="/biblioteca" component={Biblioteca} />
      <Route path="/login" component={Login} />
    </Switch>
  </Router>
);

export default App;

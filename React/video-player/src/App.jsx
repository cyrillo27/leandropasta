import { useState } from 'react'
import VideoPlayer from './VideoPlayer.jsx';
import './App.css'

function App() {
  const [tocando, setPlayPause] = useState(false);
 
  return (
    <>
      <button 
        style={{
          fontSize: "5em"
        }}
        onClick={() => setPlayPause(!tocando)}>
        { tocando ? 'play' : 'pause' }
      </button>

      <VideoPlayer tocando={tocando}      />

    </>
  )
}

export default App

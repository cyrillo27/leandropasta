import { useEffect, useRef, useState } from "react";

function VideoPlayer ({tocando}) { 
    
    const referenciaDoVideo = useRef(null);

    useEffect(() => {
        
        if(tocando) {
            referenciaDoVideo.current.play()
        } else {
            referenciaDoVideo.current.pause();
        }    

    }, [tocando, referenciaDoVideo])

    return (
        <>
            <video 
            ref={referenciaDoVideo}   
            src="https://interactive-examples.mdn.mozilla.net/media/cc0-videos/flower.mp4" 
            loop playsInline />
        </>
    )
}

export default VideoPlayer;
import Splide, { Options, ControllerComponent, EventMap } from '@splidejs/splide';
import '@splidejs/splide/css/core';
import { URLHash } from '@splidejs/splide-extension-url-hash';

export class Gallery {
  private gallery: Splide | null = null;

  constructor(private wrapperId: string, private options: Options = {}) {}

  
  init(): void {
    const element = document.getElementById(this.wrapperId) as HTMLDivElement;
    if(!element) return;

    this.gallery = new Splide( element, this.options ).mount({ URLHash });
    // this.carousel = element ? new Glider(element, this.options) : null;
  }

  getLength(): number | undefined {
    return this.gallery?.length
  }

  getCurrentIndex(): number | undefined {
    return this.gallery?.Components.Controller.getIndex()
  }

  next(): void {
    this.gallery?.go('>');
  }

  prev(): void {
    this.gallery?.go('<');
  }

  on<K extends keyof EventMap>(eventName: K, callback: EventMap[K]): void {
    this.gallery?.on(eventName, callback);
  }


  destroy(): void {
    // if (this.glider) {
    //   this.glider.destroy();
    //   this.glider = null;
    // }
  }
}
